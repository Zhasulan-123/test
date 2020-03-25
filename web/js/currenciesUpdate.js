$ (function () {
  $ ('body').on ('click', '.click_update', function (e) {
    e.preventDefault ();
    var id = $ (this).data ('id');
    $ ('#modal-default').modal ('show');
    $ ('#modal-default')
      .find ('.modal-content')
      .load ('/admin/currencies/update-past?id=' + id);
  });

  $ ('body').on ('click', '#submitUpdate', function (e) {
    e.preventDefault ();
    var url = $ ('#FormUpdate').attr ('action');
    var param = $ ('#FormUpdate').serializeArray ();
    $.ajax ({
      type: 'POST',
      url: url,
      data: param,
      dataType: 'json',
      success: function (data) {
        if (data.success) {
          $ ('#modal-default').modal ('toggle');
          $ ('.past_up > tbody').html (data.html);
        } else {
          alert ('error');
        }
      },
    });
  });

  $ ('body').on ('click', '.click_delete', function (e) {
    e.preventDefault ();
    var id = $ (this).data ('id');
    if (confirm ('Вы действительно хотите удалить?')) {
      $.ajax ({
        type: 'POST',
        url: '/admin/currencies/delete',
        data: {
          _csrf: yii.getCsrfToken (),
          id: id,
        },
        dataType: 'json',
        success: function (response) {
          if (response.delete) {
            $ ('.past_up > tbody').html (response.html);
          } else {
            alert ('error');
          }
        },
      });
    }
  });
});

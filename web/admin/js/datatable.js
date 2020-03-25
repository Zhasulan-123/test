$ (function () {
  var table = $ ('#TableSearch').DataTable ({
    language: {
      paginate: {
        previous: 'Предыдущий',
        next: 'Следующий',
      },
      info: 'Страница _PAGE_ из _PAGES_',
      infoEmpty: 'Нет записей для отображения',
      lengthMenu: "<select id='inputState' class='form-control'>" +
        '<option value="10">10</option>' +
        '<option value="20">20</option>' +
        '<option value="30">30</option>' +
        '<option value="40">40</option>' +
        '<option value="50">50</option>' +
        '<option value="-1">Все</option>' +
        '</select> кол-во',
      search: 'Поиск _INPUT_ ',
      zeroRecords: 'Нечего не найдено !!!',
      infoFiltered: ' - Таблица форма _MAX_ кол-во',
    },
    autoWidth: false,
  });

  // Apply the search
  table.columns ().every (function () {
    var that = this;

    $ ('input', this.header ()).on ('keyup change', function () {
      if (that.search () !== this.value) {
        that.search (this.value).draw ();
      }
    });
  });
});

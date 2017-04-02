function initSortable() {
  $('[data-sortable=1] tbody').sortable({
    animation: 300,
    handle: '.sortable-handler',
    dataIdAttr: 'data-sortable-id',
    onEnd: function (e) {
      $.post($(this.el).parents('[data-sortable=1]').data('sortable-url'), {
        sorting: this.toArray()
      });
    }
  });
}

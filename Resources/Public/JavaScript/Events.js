$(document).ready(function () {
  eventTitle = $('.h1--pagetitle').html();
  $('.form-event-title > input').attr('value', $.trim(eventTitle));

  eventPid = $('.event').data("id");
  $('.form-event-pid').attr('value', eventPid);
});

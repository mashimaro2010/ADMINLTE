$(document).ready(function() {
  var table = $('#WaitTing_Time_Period').DataTable();

  // คำนวณหาค่ารวมของ column ที่ 25
  var total = table.column( 25 ).data().sum();
 
  // แสดงผลรวมที่ footer
  $('#WaitTing_Time_Period tfoot th:eq(25)').html(total);
});
console.log(total);
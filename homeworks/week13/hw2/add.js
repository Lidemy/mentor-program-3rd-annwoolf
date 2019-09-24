/* eslint-env jquery */
/* eslint func-names: ["error", "never"] */

$(document).ready(() => {
  // 點button
  $('#add').click(() => {
    // 存取input值，存起來
    const inputValue = $('#input').val();
    // append
    $('#new_list').append(
      `
            <div class="new">
                <input type="checkbox" class="checkbox" style="zoom:180%"; /> 
                <p>${inputValue}</p>
                <button class="delete btn btn-success"> X </button>
            </div>
            `,
    );
    // 清空值
    $('#input').val('');

    // prop()確認check狀態
    // 遍歷
    $('.checkbox').each(function () {
      // 點checkbox
      $(this).click(function () {
        // 確認狀態
        const checkStatus = $(this).prop('checked');
        // 如果等於 true 換顏色，如果等於 false 換回來
        if (checkStatus === true) {
          $(this).parent().children('p').css({ 'text-decoration': 'line-through', color: '#839496' });
        } else if (checkStatus === false) {
          $(this).parent().children('p').css({ 'text-decoration': 'none', color: '#839496' });
        }
      });
    });

    // 刪除
    $('.delete').each(function () {
      $(this).click(function () {
        $(this).closest('div').remove();
      });
    });
  });

  // 原來在上面的範例也可以prop()確認check狀態
  // 遍歷
  $('.checkbox').each(function () {
    // 點checkbox
    $(this).click(function () {
      // 確認狀態
      const checkStatus = $(this).prop('checked');
      // 如果等於 true 換顏色，如果等於 false 換回來
      if (checkStatus === true) {
        $(this).parent().children('p').css({ 'text-decoration': 'line-through', color: '#839496' });
      } else if (checkStatus === false) {
        $(this).parent().children('p').css({ 'text-decoration': 'none', color: '#839496' });
      }
    });
  });

  // 原來在上面的範例也可以刪除
  $('.delete').each(function () {
    $(this).click(function () {
      $(this).closest('div').remove();
    });
  });
});

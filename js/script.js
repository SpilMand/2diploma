let menu = $('.header__burger');
let menuMobile = $('.header__menu-mobile');
let isOpen = false;

function openMenu() {
  if (!isOpen) {
    menu.addClass('opened');
    menuMobile.css('display', 'flex');
  }
  else {
    menu.removeClass('opened');
    menuMobile.css('display', 'none');
  }
  isOpen = !isOpen;
}
// Update query value from uri func
function updateQueryStringParameter(uri, key, value) {
    var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
    var separator = uri.indexOf('?') !== -1 ? "&" : "?";
    if (uri.match(re)) {
      return uri.replace(re, '$1' + key + "=" + value + '$2');
    }
    else {
      return uri + separator + key + "=" + value;
    }
}

// Init faculties and programms on page load
$(document).ready(function() {
    let faculty = $('#faculty').find(":selected").val();
    let action = $('#faculty').closest('form').attr('action');
    let new_action = updateQueryStringParameter(action, 'faculty', faculty);
    $('#faculty').closest('form').attr('action', new_action);

    programm = $('#programm').find(":selected").val();
    action = $('#programm').closest('form').attr('action');
    new_action = updateQueryStringParameter(action, 'programm', programm);
    $('#programm').closest('form').attr('action', new_action);
});



// Init faculties and programms on select changes
$('#faculty').on('change input', function() {
    let faculty = $(this).find(":selected").val();
    let action = $(this).closest('form').attr('action');
    let new_action = updateQueryStringParameter(action, 'faculty', faculty);
    $(this).closest('form').attr('action', new_action);
});

$('#programm').on('change input', function() {
    let programm = $(this).find(":selected").val();
    let action = $(this).closest('form').attr('action');
    let new_action = updateQueryStringParameter(action, 'programm', programm);
    $(this).closest('form').attr('action', new_action);
});
let blocksInfo = [
    'Тем, кто планирует получить высшее или второе высшее образование, поступить в магистратуру или аспирантуру',
    'Тем, кто хочет получить новые знания или развить уже имеющиеся навыки',
    'Тем, кто планирует увеличить доход и продвинуться по карьерной лестнице',
    'Тем, кто хочет создать или масштабировать собственный бизнес',
    'Тем, кто планирует учиться и работать, а также получить опыт работы уже во время обучения',
    'Тем, кто хочет выделиться на фоне других соискателей после выпуска',             
];
function WhoOpen(isOpen) {
    $('.who__content').html('');
    blocksInfo.forEach((value, key) => {
        key++;
        if (key <=3 || isOpen) {
            $('.who__content').append(`
                <div class='who__element'>
                    <div class='who__num'>${key}</div>
                    <p>${value}</p>
                    <div class='who__element-img'></div>
                </div>
            `);
        }
    });
}

WhoOpen(false);


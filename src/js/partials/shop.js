import $ from "jquery";

const updateStoreList = () => {
    const div = document.querySelector('#shop-sections .offline-store a.active');

    console.log(div);
    if(div !== null) {
        $('#shop-sections .empty-list').hide();
        $('#shop-sections .store-list').show();
    } else {
        $('#shop-sections .empty-list').show();
        $('#shop-sections .store-list').hide();
    }
}
document.addEventListener("DOMContentLoaded", function() {
    $('body').on('click', '#shop-sections .offline-store a', function (e) {
        e.preventDefault();

        if ($(this).hasClass('active')) {
            $('#shop-sections .offline-store a').removeClass('active');
        } else {
            $('#shop-sections .offline-store a').removeClass('active');
            $(this).addClass('active');
        }

        updateStoreList();
    });
});
arrowTop.onclick = function () {
    window.scrollTo(pageXOffset, 0);
    // ����� scrollTo ��������� ������� "scroll", ��� ��� ������� ������������� ��������
};

window.addEventListener('scroll', function () {
    arrowTop.hidden = (pageYOffset < document.documentElement.clientHeight);
});
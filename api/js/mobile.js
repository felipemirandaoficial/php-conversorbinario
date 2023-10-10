function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
}
window.addEventListener('load', function() {
    if (isMobileDevice()) {
        document.getElementById('fundo').style.backgroundColor = '#1d1d1d';
    } else {
        document.getElementById('fundo').style.backgroundColor = 'transparent';
    }
});     
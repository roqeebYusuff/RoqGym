(function($) {

    showToastSuccess = (tit, mes) => {
        iziToast.success({
            title: tit,
            message: mes,
            position: 'topRight',
            timeout: 5000,
        });
    }

    showToastError = (tit, mes) => {
        iziToast.error({
            title: tit,
            message: mes,
            position: 'topRight',
            timeout: 5000,
        });
    }

    showToastWarning = (tit, mes) => {
        iziToast.warning({
            title: tit,
            message: mes,
            position: 'topRight',
            timeout: 5000,
        });
    }

    showToastInfo = (tit, mes) => {
        iziToast.info({
            title: tit,
            message: mes,
            position: 'topRight',
            timeout: 5000,
        });
    }

})(jQuery);
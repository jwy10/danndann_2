const inputElement = document.getElementById('vnum');

inputElement.addEventListener('focus', function() {
    if (this.placeholder === '  차량번호를 입력하세요') {
        this.placeholder = '';
    }
});

inputElement.addEventListener('blur', function() {
    if (this.placeholder === '') {
        this.placeholder = '  차량번호를 입력하세요';
    }
});
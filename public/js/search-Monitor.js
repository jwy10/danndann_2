$(document).ready(function() {
    // 폼이 제출되었을 때
    $("#search-form").submit(function(event) {
        // 폼의 기본 동작을 막습니다 (페이지 새로고침 방지)
        event.preventDefault();
        
        // 폼 데이터를 가져옵니다
        var formData = {
            client: $("#client").val(), //BIN
            vnum: $("#vnum").val(), // 검색어
        };
        
        // POST 요청을 보냅니다
        $.ajax({
            type: "POST",
            url: "/searchMonitor", // 컨트롤러의 URL을 여기에 입력하세요
            data: formData, 
            dataType: "json",
            success: function(response) {
                console.log(response); 
            },
            error: function(error) {
                console.error("오류 발생:", error);
            }
        });
    });
});




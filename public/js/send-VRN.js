$(document).ready(function() {
    $(".sendVrn-item").click(function() {
        var vrn = $(this).find(".vrn-cell").text();
        var vrnData = {
            vrn: vrn, //VRN
            _token: "{{ csrf_token() }}"
        };
        
        // POST 요청을 보냅니다
        $.ajax({
            type: "POST",
            url: "/sendVRN", // 컨트롤러의 URL을 여기에 입력하세요
            data: vrnData, 
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




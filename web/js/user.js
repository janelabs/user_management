var User = {

    initView: function(){
        var now = new Date();
        $('#bdate').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "MM d, yy",
            yearRange: (now.getFullYear()-60) +':'+ (now.getFullYear()-18)
        });

        //view user
        $('.viewUser').click(function(){
            window.location = "../view/index?id=" + $(this).attr('uid');
        });

        //delete user
        $('.deleteUser').click(function(){
            var ans = confirm("Are you sure you want to delete this user?");
            if(ans){
                window.location = "../list/delete?id=" + $(this).attr('uid');
            }
        });
    },

    goHome: function(){
        window.location = "../list/index";
    }

};
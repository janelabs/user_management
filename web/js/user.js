var User = {

    initView: function(){
        //for datepicker
        var now = new Date();
        $('#bdate').datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "MM d, yy",
            yearRange: (now.getFullYear()-60) +':'+ (now.getFullYear()-18)
        });

        //add user
        $('#addUser').button({
            icons: { primary: "ui-icon-plus" }
        });

        //edit user
        $('.editUser').button({
            icons: { primary: "ui-icon-pencil" }
        }).click(function(){
            window.location = "../edit/index?id=" + $(this).attr('uid');
        });

        //view user
        $('.viewUser').button({
            icons: { primary: "ui-icon-search" }
        }).click(function(){
            window.location = "../view/index?id=" + $(this).attr('uid');
        });

        //delete user
        $('.deleteUser').button({
            icons: { primary: "ui-icon-trash" }
        }).click(function(){
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
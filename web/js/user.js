var User = {

    initView: function(){
        $('.tbl tr:odd').css({
            "background-color": '#f0e68c'
        });
        $('.tbl tr:even').css({
            "background-color": '#FFF0C7'
        });

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

        //button style submit
        $('input[type="submit"]').button({
            icons: { primary: "ui-icon-disk" }
        });

        //button style button
        $('input[type="button"]').button();

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
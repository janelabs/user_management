var User = {

    initView: function(){
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
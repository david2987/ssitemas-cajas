

$("#loginBoton").click(function () { 
    $("#loginForm").trigger("submit");
});

$("#loginForm").submit(function (e) { 
    login(this)
    e.preventDefault();
});

function login(formlario) {
    
    
}
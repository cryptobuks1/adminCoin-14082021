console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);



window.addEventListener("load", ()=>{
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    if (!sidebar.classList.contains("open")){
        sidebar.classList.add("open");
    }

    if(closeBtn){
        closeBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("open");
            menuBtnChange();//calling the function(optional)
        });
    }

    if(searchBtn){
        searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });
    }

    // following are the code to change sidebar button(optional)
    const menuBtnChange = () => {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
        }else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
    }

    if (window.innerWidth <= 1280){
        sidebar.classList.remove("open");
    }
});

window.addEventListener('resize', ()=>{
    let sidebar = document.querySelector(".sidebar");

    if (window.innerWidth <= 1280){
        sidebar.classList.remove("open");
    }else {
        sidebar.classList.add("open");
    }
});
// default state
var isHiddenNavOpen = false
$('#triggerNavBtn').click(function (){
    if (isHiddenNavOpen){
        document.querySelector("#triggerIcon").removeAttribute('name');
        document.querySelector("#triggerIcon").setAttribute('name','menu-outline');
        $('#hiddenBtns').animate(
            {
                width: "0px",
                margin: "0px 0px 0px 100px"
            },500,function (){
                $('#hiddenBtns').css("display","none");
            }
        )
    }else{
        document.querySelector("#triggerIcon").removeAttribute('name');
        document.querySelector("#triggerIcon").setAttribute('name','close-circle-outline');
        $('#hiddenBtns').css("display","flex");
        $('#hiddenBtns').animate(
            {
                width: "100px",
                margin: "0px"
            },500
        )
    }

    isHiddenNavOpen = !isHiddenNavOpen
})
<style>
    .navbar-nav > li.active {
        border-bottom: 2px solid #4169e1 !important;
    }
    .navbar-nav > li:after {
        background: #4169e1 !important;
    }
    .btn-primary {
        background-color: #4169e1 !important;
        color: #fff;
        border: 2px solid #4169e1 !important;
    }
    .widgets-contact .widget-contact-icon:after {
        background-color: #4169e1 !important;
    }
    .service-4 .service-block:hover .service-icon {
        background-color: #4169e1 !important;
    }
    .heading-bg:before {
        border: 2px solid #4169e1 !important;
    }
    .testimonial-3 .testimonial-content {
        background-color: #4169e1 !important;
    }
    .accordion .panel-heading .accordion-toggle:after {
        background-color: #4169e1 !important;
    }
    .bg-overlay-theme:before {
        background-color: #4169e1 !important;
    }
    .bg-theme {
        background-color: #4169e1 !important;
    }
    .copyrights a {
        color: #4169e1 !important;
    }
    .service-3 .service-block:hover h4, .service-4 .service-block:hover h4, .service-5 .service-block:hover h4 {
        color: #4169e1 !important;
    }
    .navbar-toggle {
        border-color: #4169e1 !important;
    }
    .navbar-toggle .icon-bar {
        background-color: #4169e1 !important;
    }
    a:hover {
        color: #4169e1 !important;
    }
    .accordion .panel-heading .accordion-toggle.collapsed::after {
        color: #fafafa !important;
        background-color: transparent;
    }
    .cta-1, .cta-2 {
        background-color: #fafafa !important;
    }
    .service-4 .service-desc, .service-5 .service-desc {
        padding-left: 0px !important;
    }
    .h110{
        height: 110px
    }
    .h50{
        height: 50px;
    }
    .service-4 .service-content {
        margin-bottom: 0px !important;
    }
    .testimonial-img i {
        background-color: #4169e1 !important;
    }
    .modal-header {
        background-color: #4169e1 !important;
    }
    .modal-dialog {
        width: 50% !important;
    }
    .btn-primary:hover{
        color: white !important;
    }


    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }


    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }

    /* ---Countdown--- */
    .countdown-wrap .countdown.item-4 .countdown__item {
        border: 1px solid #e5e5e5;
        display: inline-block;
        position: relative;
        width: 70px;
        padding: 10px 0;
        text-align: center;
        margin-left: 15px;
    }

    .countdown-wrap .countdown.item-4 .countdown__item:first-child {
        margin-left: 0;
    }

    @media (max-width: 575px) {
        .countdown-wrap .countdown.item-4 .countdown__item {
            width: 50px;
            margin-left: 5px;
            padding: 5px 0;
        }
    }

    .countdown-wrap .countdown.item-4 .countdown__item span.countdown__time {
        display: block;
        color: #242424;
        font-size: 24px;
    }

    @media (max-width: 575px) {
        .countdown-wrap .countdown.item-4 .countdown__item span.countdown__time {
            font-size: 16px;
        }
    }

    .countdown-wrap .countdown.item-4 .countdown__item span.countdown__text {
        display: block;
    }
    .countdown-wrap .countdown.item-4 .countdown__item {
        border: 1px solid #000000;
    }
    .w100{
        width: 100%;
    }
    .pb-10{
        padding-bottom: 10px;
    }
    .pb-20{
        padding-bottom: 20px;
    }
    .countdown-wrap .countdown.item-4 .countdown__item {
        width: 70px;
        margin-left: 5px;
        padding: 5px 0;
    }
    @media only screen and (max-width: 600px) {
        .mdn{
            display: none;
        }
        .modal-dialog {
            width: 100% !important;
        }
        .tab {
            width: 100% !important;
        }
        .tabcontent {
            width: 100% !important;
        }
    }
    /* Style the tab */
    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #4169e1;
        width: 20%;
        height: 300px;
    }

    /* Style the buttons inside the tab */
    .tab button {
        display: block;
        background-color: inherit;
        color: white;
        padding: 12px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #141d40;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: #141d40;
    }

    /* Style the tab content */
    .tabcontent {
        float: left;
        padding: 0px 12px;
        width: 80%;
        border-left: none;
    }
    .callout{
        padding: 20px
    }
    .projects-filter ul li a:hover, .projects-filter ul li a.active-filter {
        color: #4169e1 !important;
        border-bottom: 2px solid #4169e1 !important;
    }
    .navbar-nav {
        margin-right: -20px !important;
    }
    
    /* CSS Multiple Whatsapp Chat */
    .whatsapp-name {
        font-size: 16px;
        font-weight: 600;
        padding-bottom: 0;
        margin-bottom: 0;
        line-height: 0.5;
    }

    #whatsapp-chat {
        box-sizing: border-box !important;

        outline: none !important;
        position: fixed;
        width: 350px;
        border-radius: 10px;
        box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
        bottom: 90px;
        right: 30px;
        overflow: hidden;
        z-index: 99;
        animation-name: showchat;
        animation-duration: 1s;
        transform: scale(1);
    }
    a.blantershow-chat {
        /*   background: #009688; */
        background: #fff;
        color: #404040;
        position: fixed;
        display: flex;
        font-weight: 400;
        justify-content: space-between;
        z-index: 98;
        bottom: 20px;
        right: 30px;
        font-size: 15px;
        padding: 10px 20px;
        border-radius: 30px;
        box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
    }
    a.blantershow-chat svg {
        transform: scale(1.2);
        margin: 0 10px 0 0;
    }
    .header-chat {
        /*   background: linear-gradient(to right top, #6f96f3, #164ed2); */
        background: #009688;
        background: #095e54;
        color: #fff;
        padding: 20px;
    }
    .header-chat h3 {
        margin: 0 0 10px;
    }
    .header-chat p {
        font-size: 14px;
        line-height: 1.7;
        margin: 0;
    }
    .info-avatar {
        position: relative;
    }
    .info-avatar img {
        border-radius: 100%;
        width: 50px;
        float: left;
        margin: 0 10px 0 0;
    }

    a.informasi {
        padding: 20px;
        display: block;
        overflow: hidden;
        animation-name: showhide;
        animation-duration: 0.5s;
    }
    a.informasi:hover {
        background: #f1f1f1;
    }
    .info-chat span {
        display: block;
    }
    #get-label,
    span.chat-label {
        font-size: 12px;
        color: #888;
    }
    #get-nama,
    span.chat-nama {
        margin: 5px 0 0;
        font-size: 15px;
        font-weight: 700;
        color: #222;
    }
    #get-label,
    #get-nama {
        color: #fff;
    }
    span.my-number {
        display: none;
    }
    /* .blanter-msg {
      color: #444;
      padding: 20px;
      font-size: 12.5px;
      text-align: center;
      border-top: 1px solid #ddd;
    } */
    textarea#chat-input {
        border: none;
        font-family: "Arial", sans-serif;
        width: 100%;
        height: 50px;
        outline: none;
        resize: none;
        padding: 10px;
        font-size: 14px;
    }

    a#send-it {
        width: 30px;
        font-weight: 700;
        padding: 10px 10px 0;
        background:#eee;
        border-radius: 10px;

    svg {
        fill:#a6a6a6;
        height: 24px;
        width: 24px;
    }
    }

    .first-msg {
        background: transparent;
        padding: 30px;
        text-align: center;
    & span {
          background: #e2e2e2;
          color: #333;
          font-size: 14.2px;
          line-height: 1.7;
          border-radius: 10px;
          padding: 15px 20px;
          display: inline-block;
      }
    }

    .start-chat .blanter-msg {
        display: flex;
    }
    #get-number {
        display: none;
    }
    a.close-chat {
        position: absolute;
        top: 5px;
        right: 15px;
        color: #fff;
        font-size: 30px;

    }

    @keyframes ZpjSY{
        0% {
            background-color: rgb(182, 181, 186);
        }
        15% {
            background-color: rgb(17, 17, 17);
        }
        25% {
            background-color: rgb(182, 181, 186);
        }
    }

    @keyframes hPhMsj {
        15% {
            background-color: rgb(182, 181, 186);
        }
        25% {
            background-color: rgb(17, 17, 17);
        }
        35% {
            background-color: rgb(182, 181, 186);
        }
    }

    @keyframes iUMejp {
        25% {
            background-color: rgb(182, 181, 186);
        }
        35% {
            background-color: rgb(17, 17, 17);
        }
        45% {
            background-color: rgb(182, 181, 186);
        }
    }


    @keyframes showhide {
        from {
            transform: scale(0.5);
            opacity: 0;
        }
    }
    @keyframes showchat {
        from {
            transform: scale(0);
            opacity: 0;
        }
    }
    @media screen and (max-width: 480px) {
        #whatsapp-chat {
            width: auto;
            left: 5%;
            right: 5%;
            font-size: 80%;
        }
    }
    .hide {
        display: none;
        animation-name: showhide;
        animation-duration: 0.5s;
        transform: scale(1);
        opacity: 1;
    }
    .show {
        display: block;
        animation-name: showhide;
        animation-duration: 0.5s;
        transform: scale(1);
        opacity: 1;
    }

    .whatsapp-message-container {
        display: flex;
        z-index: 1;
    }

    .whatsapp-message {
        padding: 7px 14px 6px;
        background-color: rgb(255, 255, 255);
        border-radius: 0px 8px 8px;
        position: relative;
        transition: all 0.3s ease 0s;
        opacity: 0;
        transform-origin: center top 0px;
        z-index: 2;
        box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
        margin-top: 4px;
        margin-left: -54px;
        max-width: calc(100% - 66px);
    }

    .whatsapp-chat-body {
        padding: 20px 20px 20px 10px;
        background-color: rgb(230, 221, 212);
        position: relative;
    &::before {
         display: block;
         position: absolute;
         content: "";
         left: 0px;
         top: 0px;
         height: 100%;
         width: 100%;
         z-index: 0;
         opacity: 0.08;
         background-image: url("https://elfsight.com/assets/chats/patterns/whatsapp.png");
     // background-image: url(https://res.cloudinary.com/eventbree/image/upload/v1575782560/Widgets/whatsappbg_opt.jpg);
     }
    }

    .dAbFpq {
        display: flex;
        z-index: 1;
    }

    .eJJEeC {
        background-color: rgb(255, 255, 255);
        width: 52.5px;
        height: 32px;
        border-radius: 16px;
        display: flex;
        -moz-box-pack: center;
        justify-content: center;
        -moz-box-align: center;
        align-items: center;
        margin-left: 10px;
        opacity: 0;
        transition: all 0.1s ease 0s;
        z-index: 1;
        box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
    }

    .hFENyl {
        position: relative;
        display: flex;
    }

    .ixsrax {
        height: 5px;
        width: 5px;
        margin: 0px 2px;
        border-radius: 50%;
        display: inline-block;
        position: relative;
        animation-duration: 1.2s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        top: 0px;
        background-color: rgb(158, 157, 162);
        animation-name: ZpjSY;
    }

    .dRvxoz {

        height: 5px;
        width: 5px;
        margin: 0px 2px;
        background-color: rgb(182, 181, 186);
        border-radius: 50%;
        display: inline-block;
        position: relative;
        animation-duration: 1.2s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        top: 0px;
        animation-name: hPhMsj;
    }

    .kAZgZq {
        padding: 7px 14px 6px;
        background-color: rgb(255, 255, 255);
        border-radius: 0px 8px 8px;
        position: relative;
        transition: all 0.3s ease 0s;
        opacity: 0;
        transform-origin: center top 0px;
        z-index: 2;
        box-shadow: rgba(0, 0, 0, 0.13) 0px 1px 0.5px;
        margin-top: 4px;
        margin-left: -54px;
        max-width: calc(100% - 66px);
    &::before {
         position: absolute;
         background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAmCAMAAADp2asXAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAACQUExURUxpccPDw9ra2m9vbwAAAAAAADExMf///wAAABoaGk9PT7q6uqurqwsLCycnJz4+PtDQ0JycnIyMjPf3915eXvz8/E9PT/39/RMTE4CAgAAAAJqamv////////r6+u/v7yUlJeXl5f///5ycnOXl5XNzc/Hx8f///xUVFf///+zs7P///+bm5gAAAM7Ozv///2fVensAAAAvdFJOUwCow1cBCCnqAhNAnY0WIDW2f2/hSeo99g1lBYT87vDXG8/6d8oL4sgM5szrkgl660OiZwAAAHRJREFUKM/ty7cSggAABNFVUQFzwizmjPz/39k4YuFWtm55bw7eHR6ny63+alnswT3/rIDzUSC7CrAziPYCJCsB+gbVkgDtVIDh+DsE9OTBpCtAbSBAZSEQNgWIygJ0RgJMDWYNAdYbAeKtAHODlkHIv997AkLqIVOXVU84AAAAAElFTkSuQmCC");
         background-position: 50% 50%;
         background-repeat: no-repeat;
         background-size: contain;
         content: "";
         top: 0px;
         left: -12px;
         width: 12px;
         height: 19px;
     }
    }

    .bMIBDo {
        font-size: 13px;
        font-weight: 700;
        line-height: 18px;
        color: rgba(0, 0, 0, 0.4);
    }

    .iSpIQi {
        font-size: 14px;
        line-height: 19px;
        margin-top: 4px;
        color: rgb(17, 17, 17);
    }

    .iSpIQi {
        font-size: 14px;
        line-height: 19px;
        margin-top: 4px;
        color: rgb(17, 17, 17);
    }

    .cqCDVm {
        text-align: right;
        margin-top: 4px;
        font-size: 12px;
        line-height: 16px;
        color:
            rgba(17, 17, 17, 0.5);
        margin-right: -8px;
        margin-bottom: -4px;
    }

</style>

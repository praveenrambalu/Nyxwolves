  
<style>
.noUi-handle.noUi-handle-lower, .noUi-handle.noUi-handle-upper  {
    height: 20px;
    width: 20px;
    border-radius: 50%;
    box-shadow: none;
}
.noUi-horizontal {
    height: 10px;
}
.noUi-handle::before, .noUi-handle::after {
    display:none;
}

.noUi-connect{

background-image: -webkit-linear-gradient(45deg, var(--secondary-color) 15%, var(--primary-color) 65%);
    background-image: linear-gradient(45deg, var(--secondary-color) 15%, var(--primary-color) 65%);
    background-size: 200% auto;
    -webkit-animation: effect 1s linear infinite;
    animation: effect 1s linear infinite;
    color: var(--primary-b-color);

}

.noUi-tooltip {
    display: none;
}
.noUi-active .noUi-tooltip {
    display: block;
}
#lower-value {
    float: left;
    color: #000;
}
#upper-value {
    float: right;
    color: #000;
}

input[type="checkbox"] + label {
color:#000;
}
input[type="checkbox"] + label::before {
    border: 1px solid #0443b7;
}
.pt-1.pb-3.text-white {
    color: #000 !important;
}

</style>
<!-- Policy Redirect -->
<div id="policyPopup"
    style="display:none;position:fixed;left:0;top:0;width:100%;height:100%;background:rgba(0,0,0,.5);z-index:99999;">
    <div
        style="background:#fff;width:380px;padding:25px;border-radius:10px;position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);text-align:center;">

        <h3 style="margin:0 0 10px;color:#0b5f7d;">Redirect Notice</h3>

        <p style="font-size:15px;color:#444;">
            You are being redirected to Policies365.<br>
            Do you want to continue?
        </p>
        <button id="policyCancel"
            style="margin-left:10px;background:#ddd;border:none;padding:10px 25px;border-radius:5px;cursor:pointer;">
            No
        </button>
        <button id="policyOk"
            style="background:#0b5f7d;color:#fff;border:none;padding:10px 25px;border-radius:5px;cursor:pointer;">
            Yes
        </button>

    </div>
</div>

<script>
$(function() {

    $(document).on("click", "#policyLink", function(e) {
        e.preventDefault();
        $("#policyPopup").fadeIn();
    });

    $(document).on("click", "#policyCancel", function() {
        $("#policyPopup").fadeOut();
    });

    $(document).on("click", "#policyOk", function() {
        window.open("https://www.policies365.com/sme-chamber-of-india.php", "_blank");
        $("#policyPopup").fadeOut();
    });

});
</script>
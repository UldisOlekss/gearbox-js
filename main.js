var gearShiftKnob = $(".gear-shift-knob"),
    gearMap = [[14, 93, 93, 172, 172, 251, 251], [25, 25, 115, 25, 115, 25, 115, 73]],
    timeoutActive = false;

$(document).on('click', '.gear-shift-position', function() {
    var newGear = $(this).data('gear');
    if(!timeoutActive) {
        switchGear(newGear);
        $(".gear-shift-position").removeClass('active');
        $(this).toggleClass('active');
    }
});

function switchGear(newGear) {
    var timeout = 0,
        $activeGear = $(".gear-shift-position.active"),
        activeGearExists = $activeGear.length !== 0;

    if(activeGearExists && $activeGear.data("gear") === newGear) return;
    // if($(".gear-shift-position.active").length !== 0) {
        timeoutActive = true;
        setTimeout(function(){
            gearShiftKnob.css("top", gearMap[1][7]);
        }, timeout);
        timeout += 200;
    // }
    setTimeout(function(){
        gearShiftKnob.css("left", gearMap[0][newGear]);
    }, timeout);
    timeout += 200;
    setTimeout(function(){
        gearShiftKnob.css("top", gearMap[1][newGear]);
        timeoutActive = false;
    }, timeout);
}


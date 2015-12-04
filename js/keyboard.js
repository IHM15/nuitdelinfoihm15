
KEY_DOWN	= 40;
KEY_UP		= 38;
KEY_LEFT	= 37;
KEY_RIGHT	= 39;

KEY_END		= 35;
KEY_BEGIN	= 36;

KEY_BACK_TAB 	= 8;
KEY_TAB		    = 9;
KEY_SH_TAB  	= 16;
KEY_ENTER		= 13;
KEY_ESC			= 27;
KEY_SPACE		= 32;
KEY_DEL			= 46;

KEY_A		= 65;
KEY_B		= 66;
KEY_C		= 67;
KEY_D		= 68;
KEY_E		= 69;
KEY_F		= 70;
KEY_G		= 71;
KEY_H		= 72;
KEY_I		= 73;
KEY_J		= 74;
KEY_K		= 75;
KEY_L		= 76;
KEY_M		= 77;
KEY_N		= 78;
KEY_O		= 79;
KEY_P		= 80;
KEY_Q		= 81;
KEY_R		= 82;
KEY_S		= 83;
KEY_T		= 84;
KEY_U		= 85;
KEY_V		= 86;
KEY_W		= 87;
KEY_X		= 88;
KEY_Y		= 89;
KEY_Z		= 90;

KEY_PF1		= 112;
KEY_PF2		= 113;
KEY_PF3		= 114;
KEY_PF4		= 115;
KEY_PF5		= 116;
KEY_PF6		= 117;
KEY_PF7		= 118;
KEY_PF8		= 119;
				
// Only on map element
document.onkeydown = applyKey;

function checkEventObj ( _event_ ) {
	// For IE explorer
	if ( window.event ) {
		return window.event;
	}
	// For all others
	else {
		return _event_;
	}
}
/*
	H - Afficher les hopitaux
	A - Afficher les attentats
	E - Afficher les epidemies
	C - Afficher les catastrophes naturelles
	P - Afficher les pandemies
	I - Afficher les incendies
	U - Afficher les centres d’urgences
*/
function applyKey (_event_) {
	// Retrieve event object from web explorer
	var winObj = checkEventObj(_event_);
	var intKeyCode = winObj.keyCode;
	var intAltKey = winObj.altKey;
	var intCtrlKey = winObj.ctrlKey;
	// No combination with ctrl or Alt	
	if (!(intAltKey || intCtrlKey)) {
			if ( intKeyCode == KEY_H  ) {
				alert("Afficher les hopitaux");
			}
			else if ( intKeyCode == KEY_A ) {
				alert("Afficher les attentats");
			}
			else if ( intKeyCode == KEY_E ) {
				alert("Afficher les epidemies");
			}
			else if ( intKeyCode == KEY_C ) {
				alert("Afficher les catastrophes naturelles");
			}
			else if ( intKeyCode == KEY_P ) {
				alert("Afficher les pandemies");
			}
			else if ( intKeyCode == KEY_I ) {
				alert("Afficher les incendies");
			}
			else if ( intKeyCode == KEY_U ) {
				alert("Afficher les centres d’urgences");
			}
			winObj.keyCode = intKeyCode = REMAP_KEY_T;
			winObj.returnValue = false;
			return false;	
	}
}
$( "body" ).keypress(function() {
  console.log( "Handler for .keypress() called." );
});



function refresh(){
    const t = 1000; // rafraîchissement en millisecondes
    setTimeout('showDate()',t)
}

function showDate() {
   const date = new Date()
   const h = date.getHours();
   const m = date.getMinutes();
   const s = date.getSeconds();

    if( h < 10 )
    { 
        h = '0' + h; 
    }

    if( m < 10 )
    { 
        m = '0' + m; 
    }

    if( s < 10 )
    { 
        s = '0' + s; 
    }

    const time = h + ':' + m + ':' + s

    document.getElementById('horloge').innerHTML = time;
    refresh();
 }
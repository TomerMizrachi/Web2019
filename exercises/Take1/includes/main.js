function expose() {
    for (i = 0; i < 2; i++) {
        var aud = document.getElementById("duplicate");
        var more = aud.cloneNode(true);
        document.getElementById("my-aud").append(more);
    }
}
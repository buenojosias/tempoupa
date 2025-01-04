document.addEventListener("livewire:init", () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                Livewire.dispatch("getCoordinates", {
                    latitude: position.coords.latitude,
                    longitude: position.coords.longitude,
                });
            },
            (error) => {
                Livewire.dispatch("getCoordinates", {
                    latitude: null,
                    longitude: null,
                });
                console.error("Erro ao obter localização:", error.message);
            }
        );
    } else {
        console.error("Geolocalização não é suportada pelo navegador.");
    }
});

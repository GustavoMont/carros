<script>
    document.addEventListener('livewire:initialized', () => {

        Livewire.on("mostrarToast", (mensagem) => {
            //Aqui dentro eu coloco o que eu quero fazer caso o alguém lance o evento chamado mostrarToast
            Toastify({
                text: mensagem,
                duration: 3000, //ms
                gravity: "top", //top or bottom
                position: "right", //left center or right
                stopOnFocus: true,
                style: {
                    background: "#CCFBF1",
                    borderTop: '4px solid #14B8A6',
                    color: "#134E4A"
                }
            }).showToast();
        });

    });
</script>

{{-- Mensagem da Sessão --}}
@if (session()->has('toast'))
    <script>
        Livewire.dispatch('mostrarToast', "{{ session('toast') }}")
    </script>
@endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<script>
    var selectElement = document.getElementById('servico');
    var choices = new Choices(selectElement, {
        removeItemButton: true,
        placeholder: true,
        placeholderValue: 'Selecione um ou mais serviços',
        noChoicesText: 'Nenhum serviço disponível',
        itemSelectText: 'Pressione para selecionar',
        searchEnabled: true
    });
</script>

</body>
</html>

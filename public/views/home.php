<div class="card shadow-lg" style="width: 18rem;">
    <a href="/"> <img src="assets/img/bitcoin-5675758.svg" class="card-img-top" alt="Imagem sobre o Bitcoin"> </a>
    <div class="card-body">
        <h5 class="card-title text-center">
            Conversor de Moedas
            <?php echo message("validation"); ?>
        </h5>
        <form action=" <?= "?page=result" ?>" method="post" class="d-flex flex-column" id="form">
            <div class="col-auto">
                <label for="money" class="text-blue col-form-label"> Valor </label>
                <input type="text" id="money" name="money" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <label for="money" class="text-blue col-form-label"> From </label>
                <select class="form-select" name="coinFrom">
                    <?php foreach ((new app\classes\Money)->coins as $coin) : ?>
                        <option> <?= $coin; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-auto">
                <label for="money" class="text-blue col-form-label"> To </label>
                <select class="form-select" name="coinTo">
                    <?php foreach (array_reverse((new app\classes\Money)->coins) as $coin) : ?>
                        <option> <?= $coin; ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-auto d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#exampleModal'>
                    Converter
                </button>
            </div>
        </form>
        <?php echo message("again"); ?>
    </div>
</div>
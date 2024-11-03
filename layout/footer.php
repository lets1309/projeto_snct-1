<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }

    footer {
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        text-align: center;
        width: 100%;
        position: relative;
        margin-top: auto;
    }

    .container-footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .social-media {
        list-style: none;
        padding: 0;
        margin: 10px 0 0 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .social-media li {
        margin: 0 10px;
    }

    .social-media a {
        color: #fff;
        text-decoration: none;
    }

    .social-media a:hover {
        text-decoration: underline;
    }

    @media (max-width: 600px) {
        .social-media {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
<footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous">
</script>
<div class="container-footer">
        <p>&copy; <?php echo date("Y"); ?> Study Space. Todos os direitos reservados.</p>
        <ul class="social-media">

    </div>
</footer>

<aside>
    <x-svg-logo />
    <p>
        BuscoSIS
        <br />
        Educação Flexível, Resultados Reais
    </p>
</aside>
<nav>
    <h6 class="footer-title">Interno</h6>
    <a href="https://mail.hostinger.com" class="link link-hover">Webmail</a>
    <label for="my_modal_7" class="link link-hover">Ramais</label>
    <a class="link link-hover">Documentação</a>
</nav>

{{-- Modal para Ramais --}}
<input type="checkbox" id="my_modal_7" class="modal-toggle" />
<div class="modal modal-bottom" role="dialog">
    <div class="modal-box">
        <h3 class="text-lg font-bold">BuscoSIS Ramais</h3>
        <x-ramais />
    </div>
    <label class="modal-backdrop" for="my_modal_7">Close</label>
</div>

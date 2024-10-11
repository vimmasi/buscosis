<x-layout>
    <div class="grid sm:grid-cols-2 gap-2 mx-2 sm:mx-auto">
        <div class="sm:col-span-2">
            <x-card
                imagem='https://img.freepik.com/fotos-gratis/amigos-da-escola-felizes-copiam-espaco_23-2148764068.jpg?t=st=1728527446~exp=1728531046~hmac=0903b8234db09d56579de7ebd0ce1c6fafe470f1672dc55d34adb0bf5860461d&w=996'
                titulo="Novos alunos (mês atual)" card_estilo="bg-secondary text-primary" botao botao_texto="Ver mais"
                botao_link="/alunos">{{ count($alunos) }}

            </x-card>
        </div>
        <div>
            <x-card
                imagem='https://img.freepik.com/fotos-gratis/sala-de-aula-vazia-devido-a-pandemia-de-coronavirus_637285-8845.jpg?t=st=1728527592~exp=1728531192~hmac=a5484b8ca3cb887b5a4e0e749e54a48fa2229a99be040ca067d0657073ff65d2&w=826'
                titulo='Últimas aulas'>
                <ul class="h-full">
                    <li>- Matemática</li>
                    <li>- Português</li>
                    <li>- Literatura</li>
                </ul>
            </x-card>
        </div>
    </div>
</x-layout>

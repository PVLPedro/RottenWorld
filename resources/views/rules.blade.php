@extends('layouts.app')

@section('content')
    <main class="relative bg-bg-secondary h-[calc(100dvh-120px)] p-1 lg:p-4 flex flex-col gap-4 overflow-hidden">
        <section class="relative flex flex-col xl:flex-row h-full gap-4 p-2 lg:p-4 rounded-lg bg-bg-primary overflow-hidden *:relative list-none">
            <section class="flex flex-col gap-2 h-50 border-b-2 border-highlight-primary xl:border-b-0 xl:h-full xl:w-80 overflow-y-auto xl:py-8 xl:pl-12 *:w-full *:duration-100 [&_a]:hover:text-highlight-primary [&_span]:font-semibold [&_span]:text-light-gray [&_span]:mt-4">
                <a class="link" href="#introducao">Introdução</a>
                <span>Regras Gerais</span>
                <a class="link" href="#personagens">Personagens</a>
                <a class="link" href="#testes">Testes</a>
                <a class="link" href="#niveis">Níveis</a>
                <a class="link" href="#atributos-pericias">Atributos, Atributos Secundários e Perícias</a>
                <a class="link" href="#qualidades-defeitos">Qualidades e Defeitos</a>
                <a class="link" href="#npcs">NPCs</a>
                <a class="link" href="#putrefatos">Putrefatos</a>
                <a class="link" href="#itens">Itens</a>
                <span>Combate</span>
                <a class="link" href="#iniciativa">Iniciativa</a>
                <a class="link" href="#turnos-rodadas">Turnos e Rodadas</a>
                <a class="link" href="#acoes-reacoes">Ações e Reações</a>
                <a class="link" href="#danos-armas">Danos e Armas de Fogo</a>
                <a class="link" href="#curas">Curas</a>
                <a class="link" href="#estados">Estados</a>
                <a class="link" href="#efeitos">Efeitos</a>
                <a class="link" href="#armaduras">Armaduras</a>
                <span>Sanidade</span>
                <a class="link" href="#definicao-sanidade">Defnição de Sanidade</a>
                <a class="link" href="#perda-sanidade">Perda de Sanidade</a>
                <a class="link" href="#ganho-sanidade">Ganho de Sanidade</a>
                <a class="link" href="#consequencias-sanidade">Consequências da Sanidade</a>
                <span>Contaminação</span>
                <a class="link" href="#ataques-putrefatos">Ataques de Putrefatos</a>
                <a class="link" href="#modificador-contaminacao">Modificador de Contaminação</a>
                <a class="link" href="#evitando-contaminacao">Evitando Contaminação</a>
                <a class="link" href="#consequencia-contaminacao">Consequência da Contaminação</a>
            </section>
            <section class="flex-1 overflow-y-auto w-full xl:*:w-6/10 xl:*:mx-auto scroll-smooth">
                <x-title>Introdução</x-title>
                <section class="section" id="introducao">
                    <x-subtitle>Descriçao</x-subtitle>
                    <x-text>Rotten World: Um mundo moderno, cada um com sua vida, que foi devastado por um surto misterioso que transforma não só os seres humanos em criaturas loucas e insanas, mas animais também. Seus cérebros são profundamente alterados e suas visões de mundo distorcidas ao extremo.</x-text>
                    <x-text>A partir do momento em que um ser é contaminado, um simples príon começa a se multiplicar na corrente sanguínea. Torna o sangue uma espécie de ácido que corrói o cérebro e outros órgãos internos. Faz músculos terem contrações involuntariamente e cria uma fome insaciável por indivíduos de mesma espécie. Estes seres contaminados são conhecidos como Rottens (Putrefatos). Sua aparência e cheiros são podres devido ao próprio sangue, que já não é mais o mesmo.</x-text>
                    <x-text>O mundo passa pelo processo de corrosão e os humanos estão perdendo cada vez mais seu domínio para uma simples proteína infecciosa. A sobrevivência é desafiada dia após dia, tornando mais fácil ser morto por sua própria mente. será possível se manter são com a morte se espreitando em cada canto da Terra?</x-text>
                    <x-download source="pdf/Regras.pdf">Baixar PDF completo sobre Regras</x-download>
                </section>
                <x-title>Regras Gerais</x-title>
                <section class="section" id="personagens">
                    <x-subtitle>Personagens</x-subtitle>
                    <x-text>Os Jogadores controlam seus respectivos Personagens para interagirem, reagirem e compreender o mundo do RPG. Personagens possuem sua Identidade, definida por:</x-text>
                    <x-list>
                        <li>Nome, Sobrenome e Alcunha</li>
                        <li>Idade e data de aniversário</li>
                        <li>Profissão e ex-profissões</li>
                        <li>Experiências e Hobbies</li>
                        <li>Personalidade (resumida em 5 adjetivos)</li>
                        <li>Aparência</li>
                        <li>História</li>
                    </x-list>
                    <x-text>Estes elementos afetam como o Jogador vai agir como Personagem e servem de explicação para as Características:</x-text>
                    <x-list>
                        <li>Atributos</li>
                        <li>Perícias</li>
                        <li>Qualidades</li>
                        <li>Defeitos</li>
                    </x-list>
                    <x-text>Personagens também possuem 2 espaços para Habilidades, a Primária e a Secundária, podendo ser ativas ou passivas.</x-text>
                </section>
                <section class="section" id="testes">
                    <x-subtitle>Testes</x-subtitle>
                    <x-text>Em momentos cruciais, cujo resultado não é simples, Jogadores terão de fazer um Teste, que consiste em rolar dados para definir o resultado do momento. Os modificadores dos dados são feitos através das Características do Personagem.</x-text>
                    <x-text>Para todos os Testes, um ou mais d20 serão rolados e somados com bônus ou desvantagens para definir o resultado final dos dados. O resultado final deve ser maior que a DT (Dificuldade do Teste) definida pelo Mestre. Por padrão, a DT é 20, mas pode variar entre 15, 23, 26, 29 e +30 dependendo da situação.</x-text>
                    <x-text>Se um dado conveniente cair em 20, um Sucesso Crítico acontece. Resulta em uma ação extremamente bem sucedida e, em combate, resulta o dobro de dados sendo rolados. Um dado que cai em 1 resulta em uma Falha Crítica e o pior naquele cenário acontece.</x-text>
                    <x-text>Cada Teste utiliza-se precisa de Número de Dados e Modificador. O Número de Dados é definido por um Atributo e o Modificador por um Atributo ou Perícia e combinado com Qualidades e Defeitos. Existe um Teste para cada Atributo e Perícia.</x-text>
                    <x-download source="pdf/Testes.pdf">Baixar PDF Sobre Testes</x-download>
                </section>
                <section class="section" id="niveis">
                    <x-subtitle>Níveis</x-subtitle>
                    <x-text>Para o Número de Dados em um Teste, o Nível em um Atributo define quantos d20 serão rolados, ficando com o maior valor. Em caso de Nível 0, o Jogador ficará com o menor valor dos dados.</x-text>
                    <x-text>Para o Modificador em um Teste, o Nível em um Atributo ou Perícia define um bônus como o dobro do Nível. As Qualidades e Defeitos são contados juntos dependendo do Teste a ser feito.</x-text>
                </section>
                <section class="section" id="atributos-pericias">
                    <x-subtitle>Atributos, Atributos Secundários e Perícias</x-subtitle>
                    <x-text>Atributos e Perícias vão do Nível 0 a 6 para personagens comuns e até 8 para especiais. Para melhorias, o custo do Nível 1 ao 5 equivale ao próprio Nível, enquanto o Nível 6 custa 8, o Nível 7 custa 11 e o Nível 8 custa 14.</x-text>
                    <x-text>Atributos Secundários são características gerais que são calculadas com base no Nível dos Atributos. São eles: Pontos de Vida, Velocidade, Carga e Resistência.</x-text>
                    <x-download source="pdf/AtributosPericias.pdf">Baixar PDF Sobre Atributos e Perícias</x-download>
                </section>
                <section class="section" id="qualidades-defeitos">
                    <x-subtitle>Qualidades e Defeitos</x-subtitle>
                    <x-text>Possuem Valores variados e têm o objetivo de dar Bônus ou Desvantagem no Modificador de Testes. O Valor gasto para adquirir uma Qualidade ou Defeito define o Bônus ou Desvantagem que irão conceder. Cada Ponto de Defeito gasto retorna um Ponto de Qualidade.</x-text>
                    <x-download source="pdf/QualidadesDefeitos.pdf">Baixar PDF Sobre Qualidades e Defeitos</x-download>
                </section>
                <section class="section" id="npcs">
                    <x-subtitle>NPCs</x-subtitle>
                    <x-text>NPCs são personagens na história que não são controlados pelos Jogadores, mas sim pelo Mestre. Eles possuem todas as mesmas regras dos Jogadores e interagirão com os Personagens dos Jogadores de diferentes formas, dependendo da personalidade que o Mestre lhes impôs.</x-text>
                </section>
                <section class="section" id="putrefatos">
                    <x-subtitle>Putrefatos</x-subtitle>
                    <x-text>Putrefatos são os clássicos zumbis do sistema. Também possuem as mesmas regras dos Personagens e NPCs, mas agem de forma muito mais simplificada, servindo como o inimigo geral do jogo.</x-text>
                </section>
                <section class="section" id="itens">
                    <x-subtitle>Itens</x-subtitle>
                    <x-text>Itens são utilizáveis, equipáveis, consumíveis ou matérias-primas. Carregar Itens requer Carga (Atributo Secundário). Cada Item possui um Peso atribuído, sendo 0 Itens extremamente leves e do cotidiano, Peso 1 sendo Itens relativamente leves a peso médio, Peso 2 Itens pesados, Peso 3 muito pesados e Peso 4 extremamente pesados. O Peso também leva em consideração o espaço que o Item ocupa, sendo que um Item leve ainda pode ter Peso 2 caso seja muito volumoso, por exemplo. A soma de 2 Itens Peso 0 resulta em Peso 1 para a Capacidade de Carga (Sem Peso é diferente de Peso 0).</x-text>
                    <x-text>Itens também são obtidos através de um Teste de Exploração, onde o Jogador deve indicar o tipo de item que quer buscar e a partir daí seguir uma pequena série de rolagens para determinar o Item obtido.</x-text>
                    <x-download source="pdf/ObtencaoDeItens.pdf">Baixar PDF de Obtenção de Itens</x-download>
                    <x-text>Itens também podem ser obtidos através de um Teste de Artesanato ou Conhec. Militar, utilizando-se de Matérias-Primas para tais criações.</x-text>
                    <x-download source="pdf/CriacaoDeItens.pdf">Baixar PDF de Criação de Itens</x-download>
                </section>
                <x-title>Combate</x-title>
                <section class="section" id="iniciativa">
                    <x-subtitle>Iniciativa</x-subtitle>
                    <x-text>Para começar um combate, todos os envolvidos jogam Iniciativa. É parecido com um Teste, usa-se Destreza para o Número de Dados e Modificador, mas sem DT, apenas pegando os valores mais altos de cada um e ordenando eles com base nos resultados. A ordem dos Turnos segue do maior para o menor resultado.</x-text>
                    <x-text>Iniciativa: Destreza para número de dados e modificador. Bônus vindo de Corajoso, Bons Reflexos, Feiura e Irresponsável.</x-text>
                </section>
                <section class="section" id="turnos-rodadas">
                    <x-subtitle>Turnos e Rodadas</x-subtitle>
                    <x-text>As Rodadas percorrem todos os Turnos seguindo a ordem da Iniciativa. No Turno do Personagem, ele pode fazer uma Ação de Movimento e uma Ação Padrão e, fora de seu Turno, mas com apenas um uso por Rodada, o Personagem pode fazer uma Reação.</x-text>
                </section>
                <section class="section" id="acoes-reacoes">
                    <x-subtitle>Ações e Reações</x-subtitle>
                    <x-text>Uma Ação de Movimento envolve andar, falar, pegar, consumir, sacar, lançar, recarregar ou qualquer outra ação simples que encaixe-se como Movimento.</x-text>
                    <x-text>Uma Ação Padrão envolve atacar, usar uma habilidade simples ou fazer um Teste. São ações mais complexas. O Jogador pode ter até duas ações extras no seu turno, mas cada ação extra eleva a DT em 3, acumulando até 6.</x-text>
                    <x-text>Reações são ações que você pode realizar fora de seu turno em certos casos:</x-text>
                    <x-list>
                        <li>Uma Reação de Esquiva envolve desviar de um ataque que está prestes a te atingir. Necessita de um Teste de Esquiva com a DT sendo o resultado do Teste de ataque.</li>
                        <li>Uma Reação de Bloqueio envolve bloquear completamente o dano de um ataque. Necessita de um Teste de Constituição com a DT sendo o resultado do Teste de ataque.</li>
                        <li>Uma Reação de Ataque de Oportunidade é um ataque que você pode realizar fora do seu turno caso um oponente saia do seu alcance corpo a corpo (2 metros). Sair do alcance sem permitir o Ataque de Oportunidade é possível mas somente com metade da Velocidade no momento.</li>
                    </x-list>
                    <x-text>Uma Ação Completa é necessária para ações muito complexas, como usar habilidades complexas ou outras situações bem incomuns.</x-text>
                </section>
                <section class="section" id="danos-armas">
                    <x-subtitle>Danos e Armas de Fogo</x-subtitle>
                    <x-text>Dano é causado ou sofrido em vários momentos. Ataques, situações e efeitos causam danos diversos.</x-text>
                    <x-download source="pdf/Danos.pdf">Baixar PDF Sobre Danos</x-download>
                    <x-text>Armas são o principal meio para causar dano a alvos. As Armas de Fogo, em especial, possuem o próprio sistema de munição.</x-text>
                    <x-download source="pdf/ArmasDeFogoMunicao.pdf">Baixar PDF Sobre Armas de Fogo e Munição</x-download>
                </section>
                <section class="section" id="curas">
                    <x-subtitle>Cura</x-subtitle>
                    <x-text>Vida é restaurada em várias situações. Através de ações e Itens consumíveis que curam em diferentes patamares.</x-text>
                    <x-download source="pdf/Curas.pdf">Baixar PDF Sobre Curas</x-download>
                </section>
                <section class="section" id="estados">
                    <x-subtitle>Estados</x-subtitle>
                    <x-text>Estados são condições temporárias em que algum Personagem está situado e representam quando Ação de Movimento, Ação Padrão e Reação estão disponíveis ou não.</x-text>
                    <x-download source="pdf/Estados.pdf">Baixar PDF Sobre Estados</x-download>
                </section>
                <section class="section" id="efeitos">
                    <x-subtitle>Efeitos</x-subtitle>
                    <x-text>Efeitos são condições temporárias em que algum Personagem está situado. Diferente de Estados, representam situações diversas que causam bônus ou desvantagens diversas.</x-text>
                    <x-download source="pdf/Efeitos.pdf">Baixar PDF Sobre Efeitos</x-download>
                </section>
                <section class="section" id="armaduras">
                    <x-subtitle>Armaduras</x-subtitle>
                    <x-text>Armaduras são Itens equipáveis em diferentes lugares e servem para aumentar sua Resistência (DT contra Ataques).</x-text>
                    <x-download source="pdf/Armaduras.pdf">Baixar PDF Sobre Armaduras</x-download>
                </section>
                <x-title>Sanidade</x-title>
                <section class="section" id="definicao-sanidade">
                    <x-subtitle>Definição de Sanidade</x-subtitle>
                    <x-text>Sanidade é o que te mantém firme mentalmente contra o horror desse mundo. Cada personagem recebe 3 Pontos de Sanidade e 1 extra por Nível 6 ou acima em Força de Vontade. A Sanidade é afetada quando um personagem está frente a uma situação desesperadora, como estar cercado por uma horda, ver alguém importante ser morto ou não ver fuga em uma situação de perigo. Em contrapartida, a Sanidade também pode voltar em momentos em que a mente do personagem esteja estabilizada.</x-text>
                </section>
                <section class="section" id="perda-sanidade">
                    <x-subtitle>Perda de Sanidade</x-subtitle>
                    <x-text>Ao passar por um momento em que a Sanidade esteja em jogo, chama-se de Situação de Medo. Esse momento tem 2 fases.</x-text>
                    <x-text>A primeira fase, chamada de Situação Prévia de Medo, é resolvida com um Teste de Concentração com DT padrão. Em caso de sucesso, o personagem se estabiliza e a sua Sanidade não é afetada. Em caso de falha, prossegue para a verdadeira Situação de Medo.</x-text>
                    <x-text>A Situação de Medo é resolvida com um Teste de Força de Vontade, e a DT pode variar tendo em vista o quão grave é a situação e quanto ela pode afetar aquele personagem em específico. O sucesso nessa fase resulta na proteção da Sanidade, mas a falha retira um Ponto de Sanidade.</x-text>
                </section>
                <section class="section" id="ganho-sanidade">
                    <x-subtitle>Ganho de Sanidade</x-subtitle>
                    <x-text>Caso um personagem tenha perdido Sanidade, pode-se usar Teste de Conhec. Mental para fazer uma Terapia, assim recuperando 1 Ponto de Sanidade, com limite de 1 teste por dia. Outra forma de se recuperar Pontos de Sanidade é com o personagem realizando 2 horas ininterruptas de algum hobby seu.</x-text>
                </section>
                <section class="section" id="consequencias-sanidade">
                    <x-subtitle>Consequência da Sanidade</x-subtitle>
                    <x-text>Cada ponto perdido representa uma desvantagem de 2 em futuros Testes de Força de Vontade e Concentração, sendo válida até mesmo em Situações de Medo.</x-text>
                    <x-text>Quando perde-se todos os Pontos de Sanidade, o personagem sofre de um colapso nervoso, ou qualquer outra atitude irracional extremamente prejudicial ao próprio. Isso resulta em uma redução permanente de 8 Pontos de Vida, além de 2d4 de dano. Após isso, os Pontos de Sanidade voltam ao normal e todo o processo pode ocorrer novamente.</x-text>
                </section>
                <x-title>Contaminação</x-title>
                <section class="section" id="ataques-putrafatos">
                    <x-subtitle>Ataques de Putrefatos</x-subtitle>
                    <x-text>A Contaminação do agente causador da Putrefação é transmitido via ataques de putrefatos. Todo ataque que um Putrefato acertar em um personagem, rola-se um d20. A Contaminação possui uma margem de acerto, logo, com qualquer resultado fora dessa margem, a Contaminação não ocorre.</x-text>
                </section>
                <section class="section" id="modificador-contaminacao">
                    <x-subtitle>Modificador de Contaminação</x-subtitle>
                    <x-text>Todo novo dia, somente caso o Mestre quiser, ele deverá rolar um d4. A margem padrão da Contaminação é 1 e o resultado do d4 é somado à essa margem, podendo ir de 2 a 5.</x-text>
                </section>
                <section class="section" id="evitando-contaminacao">
                    <x-subtitle>Evitando Contaminação</x-subtitle>
                    <x-text>Caso um personagem seja contaminado, ainda não é o fim. Nesse momento, caso já não estejam, todos os personagens próximos rolam Iniciativa. Após 3 turnos, a Contaminação se perpetuará e nada mais poderá ser feito.</x-text>
                    <x-text>O uso do Item Injeção de Vasopressina no membro contaminado, dentro do prazo estabelecido e consumindo uma Ação Padrão de quem estiver aplicando, interrompe a Contaminação mas também faz a pessoa ficar em Estado Incapacitado por 1 turno. Porém, não conte com esse Item, pois é extremamente raro.</x-text>
                    <x-text>A forma mais agressiva de se evitar a Contaminação é cortando, se possível, o membro do corpo o qual foi atingido pelo ataque do Putrefato.</x-text>
                </section>
                <section class="section" id="consequencia-contaminacao">
                    <x-subtitle>Consequência da Contaminação</x-subtitle>
                    <x-text>Se nada for feito, ou nada puder ser feito, para impedir a Contaminação, após os 3 turnos, o personagem irá se transformar gradualmente em Putrefato. Ele vai ficar no Estado Incapacitado por 5 turnos e então virará definitivamente um Putrefato, morrendo definitivamente como personagem.</x-text>
                </section>
            </section>
        </section>
    </main>
@endsection

@push('scripts')

<script>

const sections = document.querySelectorAll('section');
const links = document.querySelectorAll('.link');

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const id = entry.target.id;

            links.forEach(link => {
                link.classList.remove('text-highlight-primary');
                
                if (link.getAttribute('href') === `#${id}`) {
                    link.classList.add('text-highlight-primary');
                }
            });
        }
    });
}, {
    threshold: 0.6
});

sections.forEach(section => observer.observe(section));

</script>
    
@endpush
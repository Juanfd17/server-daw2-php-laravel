<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $animales = [
        [
            'especie' => 'Bisonte',
            'peso' => 1000,
            'altura' => 190,
            'fechaNacimiento' => '2014-09-07',
            'imagen' => 'bisonte.jpg',
            'alimentacion' => 'herbívoro',
            'descripcion' => 'Los bisontes son potentes ungulados de carácter muy vivaz y de una asombrosa agilidad. Forman rebaños independientes de machos y hembras que se unen únicamente en la época de celo, en la que los machos están más gordos y vigorosos. Finalizado este periodo, las hembras se alejan de la manada y vuelven a su vida tranquila. Nueve meses después dan a luz un ternero, que permanecerá junto a su madre. El carácter del bisonte se modifica con el paso de los años: de joven es alegre y vivaz y, aunque no es especialmente manso, tampoco se muestran agresivos. Al hacerse viejos, sobre todo los machos, se vuelven rudos y se irritan fácilmente, llegando a ser peligrosos.'
        ],

        [
            'especie' => 'Elefante',
            'peso' => 5000,
            'altura' => 400,
            'fechaNacimiento' => '2011-07-07',
            'imagen' => 'elefante.jpg',
            'alimentacion' => 'herbívoro',
            'descripcion' => 'El elefante africano es el mayor mamífero terrestre. Viven en una sociedad matriarcal de estructura muy compleja, dirigida siempre por la hembra más vieja y por lo general estéril, que tiene a su cargo a las hembras adultas y crías menores de 14 años, a quienes no duda en proteger de todo peligro. Los grupos de elefantes se desplazan siempre en fila india, siguiendo un orden preestablecido según la jerarquía de cada miembro, y se moverán de un punto a otro dependiendo de las decisiones de la matriarca, que es quien dicta cuándo y a dónde dirigirse. Los elefantes se comunican contínuamente a través de diferentes tipos de señales, algunas de ellas imperceptibles para el hombre por su baja frecuencia, pero que éstos pueden escuchar a más de 10 kilómetros de distancia. El nacimiento de una nueva cría es un acontecimiento importanta para la manada: ésta, además de por su madre, será cuidada por el grupo. En estaciones secas, los elefantes llegan a formar grupos de 300 individuos, lo que provoca que sus migraciones devasten lo que encuentran a su paso. Sin embargo, van dejando en sus heces estiércol con semillas sin digerir que germinarán, convirtiéndose así en los mejores regeneradores de la selva. La trompa del elefante es un apéndice nasal compuesto de 4.000 músculos y tendones, lo que le proporciona una fuerza y precisión extraordinarias, siendo capaces de levantar con ella hasta una tonelada de peso. En ella, los elefantes adultos pueden albergar 17 litros de agua para bañarse o beber. En las orejas poseen gran cantidad de venas, por las cuales hacen circular 680 litros de sangre en 20 minutos, refrigerando así su cuerpo. No es raro en absoluto verlos en Cabárceno mojarse las orejas con barro o agua para ayudar a esta refrigeración. El desgaste de los colmillos indica la lateralidad de estos animales: si el más desgastado es el derecho, el elefante es diestro. La esperanza de vida de un elefante es de 62 años, y hasta su muerte ni sus colmillos ni su cuerpo dejarán de crecer.'
        ],

        [
            'especie' => 'Jaguar',
            'peso' => 85,
            'altura' => 72,
            'fechaNacimiento' => '2016-05-16',
            'imagen' => 'jaguar.jpg',
            'alimentacion' => 'carnívoro',
            'descripcion' => 'Es el mayor felino americano existente. No tiene la corpulencia del tigre o el león, aunque por el desarrollo de sus dientes y músculos de las mandíbulas, se le considera como el más poderoso de los grandes felinos. La caza furtiva para conseguir su piel, y el avance del hombre en el interior de sus territorios para dedicarlos a la ganadería, han obligado a tomar serias medidas internacionales con el fin de preservar la especie, amenazada con la extinción Su aspecto, semejante al leopardo por las manchas de la piel, difiere por su robustez y mayor tamaño de la cabeza, además de unos caninos más potentes.'
        ],

        [
            'especie' => 'Jirafa',
            'peso' => 1100,
            'altura' => 285,
            'fechaNacimiento' => '2012-12-25',
            'imagen' => 'jirafa.jpg',
            'alimentacion' => 'herbívoro',
            'descripcion' => 'Es un animal apacible y sociable que vive en pequeños rebaños conducidos por un macho adulto que lidera un grupo de hembras con sus crías y otros machos que aún no han alcanzado la madurez sexual. Su alimentación es exclusivamente hervíbora, alimentándose de las ramas de los árboles. Es muy raro ver una jirafa pacer puesto que la postura que adopta separando, las patas delanteras, las convierte en una presa fácil para los depredadores (por esta razón pasan dias enteros sin beber agua). Las manchas que cubren la piel de las jirafas varía segun la región en la que viven.'
        ],

        [
            'especie' => 'León',
            'peso' => 140,
            'altura' => 120,
            'fechaNacimiento' => '2018-01-25',
            'imagen' => 'leon.jpg',
            'alimentacion' => 'carnívoro',
            'descripcion' => 'Los leones son los únicos felinos que viven formando un grupo social jerarquizado con una división clara de papeles: los machos vigilan y defienden el territorio y las hembras cazan y cuidan de los cachorros. En cuanto a las crías, si son hembras se incorporan a la manada, reforzando y cohesionando el grupo; pero si son machos serán expulsados por su padre a los tres años de edad y vagarán, solos o en grupos muy reducidos, esperando que algún macho que tenga constituida una familia muestre un signo de debilidad, circunstancia que será aprovechada para enfrentarse a él y sustituirle. Los machos viejos, muchas veces heridos por la lucha, sobreviven durante poco tiempo y, si se recuperan de sus heridas, se convertirán en solitarios carroñeros. Como dato curioso, si un león es castrado durante una pelea, poco a poco irá perdiendo su espléndidad melena La alimentación del león se basa en la captura de gacelas, cebras, ñús y otros antílopes, aunque no desprecian nunca la oportunidad de robar las capturas a otros cazadores menos robustos (hienas, guepardos, leopardos, etc.) o incluso alimentarse de carroña, ya que poseen un bajo porcentaje de éxito en la caza, capturando una presa de cinco intentos.'
        ],

        [
            'especie' => 'Mono de Gibraltar',
            'peso' => 7,
            'altura' => 62,
            'fechaNacimiento' => '2020-03-10',
            'imagen' => 'mono.jpg',
            'alimentacion' => 'herbívoro',
            'descripcion' => 'Es el único simio salvaje de Europa que vive en libertad, concretamente en el peñón de Gibraltar. Las poblaciones más importantes se sitúan en las montañas de Marruecos, y en menor número en Argelia. Habitan en bosques de encinas, cedros del Atlas y abetos. También pueblan biotipos rocosos y de sotobosque mediterráneo. Son diurnos y viven preferentemente en el suelo. Forman grupos numerosos que se hallan socialmente bien organizados, liderados por un fuerte macho. Poseen por tanto sus propias jerarquías, hábitos y costumbres.'
        ],

        [
            'especie' => 'Tigre',
            'peso' => 145,
            'altura' => 95,
            'fechaNacimiento' => '2018-03-10',
            'imagen' => 'tigre.jpg',
            'alimentacion' => 'carnívoro',
            'descripcion' =>'Se encuentra en el continente asiático; es un predador carnívoro y es la especie de félido más grande del mundo junto con el león pudiendo alcanzar ambos un tamaño comparable al de los fósiles de félidos de mayor tamaño'
        ]
    ];

    public function run()
    {
        foreach ($this->animales as $animal)
        {
            $a = new Animal();
            $a->especie = $animal['especie'];
            $a->slug = Str::slug($animal['especie']);
            $a->peso = $animal['peso'];
            $a->altura = $animal['altura'];
            $a->fechaNacimiento = $animal['fechaNacimiento'];
            $a->imagen = $animal['imagen'];
            $a->alimentacion = $animal['alimentacion'];
            $a->descripcion = $animal['descripcion'];
            $a->save();
        }
        $this->command->info('Tabla animales inicializada con datos');

    }
}

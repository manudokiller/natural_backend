<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Icon;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Amígdalas',
                'description' => 'Estimula el sistema inmunológico específicamente contra el estreptococo Beta hemolítico que es la causa más común de la inflamación, esta acción se ejerce en base a nuestros nutrientes.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Boca',
                'description' => 'Activamos o mejoramos la mucosa oral principalmente en los casos de aftas, por el virus del herpes.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Anemia',
                'description' => 'El hierro es definitivo en la anemia porque interviene en la producción de hemoglobina, el componente de los glóbulos rojos que se adhiere al oxígeno y lo transporta.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Cabello',
                'description' => 'A nivel del folículo piloso aumenta la microcirculación, e incrementa la formación de pelo, a la vez evita la descamación y sequedad del cuero cabelludo que es lo que produce la alopecia.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Ano',
                'description' => 'Los jugos terapéuticos estimulan las evacuaciones, se dividen en aquellas que funcionan proporcionando volumen, que estimulan la producción de bilis en el hígado evitando la formación de hemorroides.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Cabeza',
                'description' => 'Los jugos terapéuticos mejoran la circulación de la sangre y aumentan el suministro de oxígeno al corazón, al cerebro y en general a todo el cuerpo, por esta razón son excelentes para la memoria y alivian los dolores de cabeza.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Arterias',
                'description' => 'Un sistema inmune fuerte es una de las claves para retrasar y prevenir el cáncer, con los jugos hemos logrado una reducción tumoral e incluso remisión completa en el 70% de los pacientes.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Cáncer',
                'description' => 'Tanto en la arteriosclerosis como en la aterosclerosis, se producen depósitos en el interior de las paredes arteriales de calcio y de grasas, los cuales se remueven con los jugos terapéuticos; además, evitan la elevación de la presión arterial, angina de pecho e infarto.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Articulaciones',
                'description' => 'Los jugos terapéuticos que se utilizan, ayudan a mejorar la producción de colágenas, lo cual favorece la formación del cartílago, tenga una mejor flexibilidad y pueda soportar un peso extra en el paciente.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Células',
                'description' => 'Nuestros jugos nutracéuticos son terapéuticos por su acción intracelular, mejoran la fisiología celular.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Bazo',
                'description' => 'Activamos con los jugos terapéuticos la formación de linfocitos B, en el bazo, parte fundamental del sistema inmunológico.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Cerebro',
                'description' => 'A nivel cerebral favorecen la reabsorción de la dopamina a nivel de las hendiduras sinápticas y por ende contribuye a una sensación de bienestar en el organismo, evitando, incluso, el desarrollo de enfermedades psicosomáticas.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Colon',
                'description' => 'Los flavonoides vegetales son útiles para reducir la respuesta inflamatoria; la manzanilla y la menta son benéficas para prevenir los gases y los cólicos, igualmente regulamos las alergias reglamentarias.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Gases',
                'description' => 'Se disminuye la producción de flatos, regulando las enzimas digestivas y mejorando la flora intestinal.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Corazón',
                'description' => 'Los jugos terapéuticos actúan sobre la célula del corazón mejorando la oxigenación, estimulando la célula cardíaca y tonificando el corazón en general; previenen los infartos cardíacos y optimizan el corazón.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Hígado',
                'description' => 'A este nivel produce una regularización de las enzimas hepáticas, activa la circulación portal y contribuye a la regularización en cuanto a la producción de triglicéridos.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Dientes',
                'description' => 'Los jugos terapéuticos evitan las exodoncias dado que revitalizan la raíz del diente, impiden por su efecto bactericida la formación de caries dental.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Huesos',
                'description' => 'Los jugos ricos en calcio y vitamina D, que contienen brócoli, ajonjolí y vegetales de hoja verde, contribuyen al fortalecimiento del hueso.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Encías',
                'description' => 'Los enjuagues bucales actúan como tónico protector para evitar la gingivitis disminuyendo la inflamación. Igualmente, nuestros jugos detienen los sangrados por posibles úlceras.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Intestino delgado',
                'description' => 'Los flavonoides vegetales como la quercetina son útiles para reducir la respuesta inflamatoria; la manzanilla, la menta evitan los gases, los cólicos y la diarrea.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Esófago',
                'description' => 'Mejora el movimiento peristáltico e igualmente se activa la circulación y la transmisión de los impulsos nerviosos en esta parte importante del organismo.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Intestino grueso',
                'description' => 'Excelente terapia para tratar el estreñimiento, la diarrea, el colon irritable y la enfermedad de Crohn; útil en el manejo de la diverticulosis y las hemorroides.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Estómago',
                'description' => 'El jugo de caléndula, de repollo morado y de banano por su alto contenido de vitamina U, ayuda a reepitelizar la mucosa gástrica.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Laringe',
                'description' => 'Disminuye la irritación y mejora la irritación de las cuerdas bucales en los casos de disfonía o afonía severa.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Faringe',
                'description' => 'Disminuye la imitación y mejora la irritación de las cuerdas bucales en los casos de disfonía o afonía severa.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Músculos',
                'description' => 'Nuestras mezclas terapéuticas disminuyen la inflamación en el caso de la artritis y trastornos circulatorios.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Nariz',
                'description' => 'El uso de la cebolla cabezona en inhalaciones produce una respuesta espectacular en los casos de rinitis alérgica y de sinusitis crónica, mitigando la congestión, aflojando flema e incluso mejorando ciertos casos de bronquitis.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Páncreas',
                'description' => 'Los jugos terapéuticos como la guayaba, el apio y el perejil estimulan los islotes de Langerhans para la producción de insulina y mantienen los niveles de glucosa en parámetros normales.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Oídos',
                'description' => 'Por sus propiedades vasodilatadores aumenta el flujo sanguíneo, mejora el aporte de oxígeno al oído y beneficia a aquellos pacientes con vértigo de Meniere.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Piel',
                'description' => 'La caléndula y el confrey suavizan la piel, se pueden utilizar saunas faciales, el confrey también reduce el enrojecimiento y alivia la irritación. La proteína de origen vegetal y los alimentos ricos en azufre ayudan a mantener la lozanía de la piel.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Ojos',
                'description' => 'Para reducir la inflamación es útil aplicar compresas con caléndula y el uso de jugos terapéuticos con alto contenido de carotenos como la zanahoria y la uchuva.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Piernas',
                'description' => 'Mejora la parte osteoarticular muscular, favorece la circulación; evita la formación de trombos, también estimula la circulación linfática.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Órgano sexual masculino',
                'description' => 'Los jugos terapéuticos estimulan y aceleran la actividad fisiológica y metabólica del organismo en las mujeres desde la amenorrea hasta casos de esterilidad o infertilidad.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Próstata',
                'description' => 'Algunas plantas mitigan la inflamación aguda de la próstata y son provechosas cuando esta glándula presenta hipertrofia, en caso de cáncer prostático son de mucha utilidad los jugos terapéuticos.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Órgano sexual masculino y femenino',
                'description' => 'Los jugos terapéuticos estimulan y aceleran la actividad fisiológica y metabólica del organismo, especialmente en los varones lo cual previene la impotencia y en las mujeres desde la amenorrea hasta casos de esterilidad o infertilidad.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Pulmones',
                'description' => 'Las hierbas y los frutos son alternantes pues restablecen gradualmente el funcionamiento adecuado de los pulmones, alivian la inflamación o reducen la respuesta inflamatoria de los tejidos, estimulan la eliminación del moco de los pulmones.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Órgano sexual femenino',
                'description' => 'La mezcla de plantas y vegetales estimulan y aceleran la actividad fisiológica y metabólica del organismo, especialmente en los varones en caso de impotencia.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Riñón',
                'description' => 'Las diuréticas aumentan la producción y la eliminación de orina, ayudan al cuerpo a eliminar los desechos y apoyan todo el proceso de limpieza interna.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Ovarios',
                'description' => 'Es útil para el tratamiento de los ovarios poliquísticos, ya que contribuye a la disminución y desaparición de los mismos.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Sangre',
                'description' => 'Las plantas por su contenido de hierro que se absorbe en el duodeno, desde el punto de vista clínico, es un tratamiento de regeneración para aumentar en un gramo la hemoglobina por semana, en promedio.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Senos',
                'description' => 'Constituyen los órganos primordiales para la producción a través de los conductos galactóforos de la leche materna.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Tiroides',
                'description' => 'Regulamos la producción de las hormonas tiroideas, especialmente la T 3 y la T 4, y en los casos de bocio disminuimos la hipertrofia de las células - tiroideas.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Uñas',
                'description' => 'Ciertas hierbas como la alfalfa son ricas en minerales, entre ellos el sílice, zinc y vitamina D que fortalecen las uñas, igualmente los jugos mejoran la circulación y nutren las uñas.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Sistema defensivo',
                'description' => 'Plantas de actividad inmunoestimulante aumentan el número de leucocitos (glóbulos blancos) y esplenocitos (los glóbulos blancos del bazo) y los fagotitos (células que tienen la capacidad de ingerir y destruir sustancias como las bacterias, los protozoarios y los desechos celulares.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Sistema digestivo',
                'description' => 'Aparte del manejo de los trastornos gastrointestinales, manejamos las alergias alimentarias, factores inmunológicos, los niveles altos o bajos de ácido clorhídrico.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Sistema inmunológico',
                'description' => 'Mejora la función inmunológica y genera células anticancerígenas en el organismo, igualmente los jugos tienen un alto poder antioxidante.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Útero',
                'description' => 'Ciertas plantas que alivian los espasmos de los músculos lisos y esqueléticos, liberan la tensión muscular y evitan abortos. Hay otro tipo de plantas que estimulan la musculatura lisa y pueden ser abortivas.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Vagina',
                'description' => 'A través de lavados vaginales se favorece la eliminación del organismo de patógenos como la gardnerella vaginalis, micosis y virus del papiloma.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Vejiga',
                'description' => 'Estimulamos sistema inmunológico en aquellos pacientes que padecen infección de vías urinarias crónicas, especialmente en aquellas producidas por la E.coli.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Sistema nervioso',
                'description' => 'Regula la formación de endorfinas y la liberación de neurotransmisores óptimos para esos estados de ansiedad y depresión de leve a severa.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Venas',
                'description' => 'Útil en el tratamiendo de enfermedades que van desde la demencia senil, Parkinson, miastenia gravis con una respuesta espectacular.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Sistema neurológico',
                'description' => 'Las hierbas hipotensivas son remedios vegetales que reducen la tensión arterial elevada.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Sistema óseo',
                'description' => 'Mucha gente cree que la causa de la osteoporosis es solamente la deficiencia de calcio en la dieta y que, por tanto, se puede remediar tomando este mineral, con nuestra experiencia clínica sabemos la importancia de la toma de vitaminas como la C, D, K.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Tendones',
                'description' => 'Obtenemos en ciertas plantas la sílice, una forma de micromineral silicio que es necesaria para la curación y reparación del tejido.',
                'image_id' => 1 //image_id
            ],
            [
                'name' => 'Vesícula',
                'description' => 'Las hierbas hepáticas ayudan al hígado, lo tonifican, lo fortalecen y pueden aumentar el flujo de la bilis. En caso de cálculos vesiculares el aceite de oliva con la piña y la naranja produce la desintegración y la eliminación de los mismos.',
                'image_id' => 1 //image_id
            ],
        ];

        Icon::insert($data);
    }
}

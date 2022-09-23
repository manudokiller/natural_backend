<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Disease;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disease::destroy(Disease::all());

        $data = [
          [
            'name' => 'Aborto',
            'disease_id' => null,
          ],
          [
            'name' => 'Amenaza de aborto',
            'disease_id' => null,
          ],
          [
            'name' => 'Abscesos',
            'disease_id' => null,
          ],
          [
            'name' => 'Ácaros',
            'disease_id' => null,
          ],
          [
            'name' => 'Acidez',
            'disease_id' => null,
          ],
          [
            'name' => 'Acidez estomacal',
            'disease_id' => null,
          ],
          [
            'name' => 'Acné',
            'disease_id' => null,
          ],
          [
            'name' => 'Adormecimiento de las manos',
            'disease_id' => null,
          ],
          [
            'name' => 'Afrodisíaco',
            'disease_id' => null,
          ],
          [
            'name' => 'Aftas',
            'disease_id' => null,
          ],
          [
            'name' => 'Agotamiento',
            'disease_id' => null,
          ],
          [
            'name' => 'Albuminuria',
            'disease_id' => null,
          ],
          [
            'name' => 'Alcoholismo',
            'disease_id' => null,
          ],
          [
            'name' => 'Alergia',
            'disease_id' => null,
          ],
          [
            'name' => 'Alopecia',
            'disease_id' => null,
          ],
          [
            'name' => 'Alzheimer',
            'disease_id' => null,
          ],
          [
            'name' => 'Amebas',
            'disease_id' => null,
          ],
          [
            'name' => 'Amebiasis',
            'disease_id' => null,
          ],
          [
            'name' => 'Amenorrea',
            'disease_id' => null,
          ],
          [
            'name' => 'Amígdalas',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de las amígdalas',
            'disease_id' => null,
          ],
          [
            'name' => 'Amigdalitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Ampollas',
            'disease_id' => null,
          ],
          [
            'name' => 'Analgésico',
            'disease_id' => null,
          ],
          [
            'name' => 'Anemia',
            'disease_id' => null,
          ],
          [
            'name' => 'Anestésico',
            'disease_id' => null,
          ],
          [
            'name' => 'Angina de pecho',
            'disease_id' => null,
          ],
          [
            'name' => 'Angustia',
            'disease_id' => null,
          ],
          [
            'name' => 'Ánimo',
            'disease_id' => null,
          ],
          [
            'name' => 'Falta de ánimo',
            'disease_id' => null,
          ],
          [
            'name' => 'Ano',
            'disease_id' => null,
          ],
          [
            'name' => 'Ansiedad',
            'disease_id' => null,
          ],
          [
            'name' => 'Ansiedad de comer',
            'disease_id' => null,
          ],
          [
            'name' => 'Artritis',
            'disease_id' => null,
          ],
          [
            'name' => 'Artritis reumatoidea',
            'disease_id' => null,
          ],
          [
            'name' => 'Antibiótico natural',
            'disease_id' => null,
          ],
          [
            'name' => 'Anticoagulante',
            'disease_id' => null,
          ],
          [
            'name' => 'Antienvejecimiento',
            'disease_id' => null,
          ],
          [
            'name' => 'Antiinflamatorio',
            'disease_id' => null,
          ],
          [
            'name' => 'Antimanchas',
            'disease_id' => null,
          ],
          [
            'name' => 'Antioxidante',
            'disease_id' => null,
          ],
          [
            'name' => 'Antiparasitario',
            'disease_id' => null,
          ],
          [
            'name' => 'Antiviral',
            'disease_id' => null,
          ],
          [
            'name' => 'Apendicitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Artrosis',
            'disease_id' => null,
          ],
          [
            'name' => 'Apetito',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimula el apetito',
            'disease_id' => null,
          ],
          [
            'name' => 'Falta de apetito',
            'disease_id' => null,
          ],
          [
            'name' => 'Arrugas',
            'disease_id' => null,
          ],
          [
            'name' => 'Arrugas en el cuello',
            'disease_id' => null,
          ],
          [
            'name' => 'Ascitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Asma',
            'disease_id' => null,
          ],
          [
            'name' => 'Arterias',
            'disease_id' => null,
          ],
          [
            'name' => 'Dilatador de las arterias',
            'disease_id' => null,
          ],
          [
            'name' => 'Flexibilidad de las arterias',
            'disease_id' => null,
          ],
          [
            'name' => 'Mal olor en las axilas',
            'disease_id' => null,
          ],
          [
            'name' => 'Arteriosclerosis',
            'disease_id' => null,
          ],
          [
            'name' => 'Articulaciones',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor en las articulaciones',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación en las articulaciones',
            'disease_id' => null,
          ],
          [
            'name' => 'Bacterias',
            'disease_id' => null,
          ],
          [
            'name' => 'Balón gástrico',
            'disease_id' => null,
          ],
          [
            'name' => 'Bazo',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de bazo',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación del bazo',
            'disease_id' => null,
          ],
          [
            'name' => 'Blanqueador dental',
            'disease_id' => null,
          ],
          [
            'name' => 'Boca',
            'disease_id' => null,
          ],
          [
            'name' => 'Aftas en la boca',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de boca',
            'disease_id' => null,
          ],
          [
            'name' => 'Infecciones en la boca',
            'disease_id' => null,
          ],
          [
            'name' => 'Llagas en la boca',
            'disease_id' => null,
          ],
          [
            'name' => 'Virus en la boca',
            'disease_id' => null,
          ],
          [
            'name' => 'Bocio',
            'disease_id' => null,
          ],
          [
            'name' => 'Bronconeumonía',
            'disease_id' => null,
          ],
          [
            'name' => 'Bronquios',
            'disease_id' => null,
          ],
          [
            'name' => 'Bronquitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Bronquitis crónica',
            'disease_id' => null,
          ],
          [
            'name' => 'Cabello',
            'disease_id' => null,
          ],
          [
            'name' => 'Caída del cabello',
            'disease_id' => null,
          ],
          [
            'name' => 'Cabello grasoso',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico para el cabello',
            'disease_id' => null,
          ],
          [
            'name' => 'Cabeza',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor de cabeza',
            'disease_id' => null,
          ],
          [
            'name' => 'Calambres',
            'disease_id' => null,
          ],
          [
            'name' => 'Calambres abdominales',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculo(s)',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculo(s)',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculo(s) biliares',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculo(s) de vejiga',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculo(s) dental',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculo(s) en la vesícula',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculo(s) en los riñones',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculo(s) hepáticos',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculo(s) renal',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de cara',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor por cáncer',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer en el pene',
            'disease_id' => null,
          ],
          [
            'name' => 'Previene el cáncer',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer testicular',
            'disease_id' => null,
          ],
          [
            'name' => 'Cansancio',
            'disease_id' => null,
          ],
          [
            'name' => 'Cansancio en las piernas',
            'disease_id' => null,
          ],
          [
            'name' => 'Cansancio excesivo',
            'disease_id' => null,
          ],
          [
            'name' => 'Cansancio físico',
            'disease_id' => null,
          ],
          [
            'name' => 'Cansancio nervioso',
            'disease_id' => null,
          ],
          [
            'name' => 'Cartílago(s)',
            'disease_id' => null,
          ],
          [
            'name' => 'Cartílago(s) desgastados',
            'disease_id' => null,
          ],
          [
            'name' => 'Caspa',
            'disease_id' => null,
          ],
          [
            'name' => 'Catarata(s)',
            'disease_id' => null,
          ],
          [
            'name' => 'Catarro',
            'disease_id' => null,
          ],
          [
            'name' => 'Ceguera',
            'disease_id' => null,
          ],
          [
            'name' => 'Ceguera nocturna',
            'disease_id' => null,
          ],
          [
            'name' => 'Célula(s)',
            'disease_id' => null,
          ],
          [
            'name' => 'Célula(s) cancerosas',
            'disease_id' => null,
          ],
          [
            'name' => 'Célula(s) cardíacas',
            'disease_id' => null,
          ],
          [
            'name' => 'Célula(s) del corazón',
            'disease_id' => null,
          ],
          [
            'name' => 'Célula(s) gástricas',
            'disease_id' => null,
          ],
          [
            'name' => 'Célula(s) hepáticas',
            'disease_id' => null,
          ],
          [
            'name' => 'Célula(s) sanguíneas',
            'disease_id' => null,
          ],
          [
            'name' => 'Celulitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Cerebral',
            'disease_id' => null,
          ],
          [
            'name' => 'Derrame cerebral',
            'disease_id' => null,
          ],
          [
            'name' => 'Ictus',
            'disease_id' => null,
          ],
          [
            'name' => 'Oxigenación cerebral',
            'disease_id' => null,
          ],
          [
            'name' => 'Traumatismo cerebral',
            'disease_id' => null,
          ],
          [
            'name' => 'Accidente cerebro vascular',
            'disease_id' => null,
          ],
          [
            'name' => 'Cerebro',
            'disease_id' => null,
          ],
          [
            'name' => 'Cicatrizante',
            'disease_id' => null,
          ],
          [
            'name' => 'Circulación',
            'disease_id' => null,
          ],
          [
            'name' => 'Circulación al corazón',
            'disease_id' => null,
          ],
          [
            'name' => 'Circulación arterial',
            'disease_id' => null,
          ],
          [
            'name' => 'Circulación capilar',
            'disease_id' => null,
          ],
          [
            'name' => 'Circulación cerebral',
            'disease_id' => null,
          ],
          [
            'name' => 'Circulación de la bilis',
            'disease_id' => null,
          ],
          [
            'name' => 'Circulación en las piernas',
            'disease_id' => null,
          ],
          [
            'name' => 'Cirrosis hepática',
            'disease_id' => null,
          ],
          [
            'name' => 'Cistitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimula el colágeno',
            'disease_id' => null,
          ],
          [
            'name' => 'Colagogo',
            'disease_id' => null,
          ],
          [
            'name' => 'Colesterol',
            'disease_id' => null,
          ],
          [
            'name' => 'Cólicos',
            'disease_id' => null,
          ],
          [
            'name' => 'Cólicos biliares',
            'disease_id' => null,
          ],
          [
            'name' => 'Cólicos digestivos',
            'disease_id' => null,
          ],
          [
            'name' => 'Cólicos estomacales',
            'disease_id' => null,
          ],
          [
            'name' => 'Cólicos menstruales',
            'disease_id' => null,
          ],
          [
            'name' => 'Cólicos renales',
            'disease_id' => null,
          ],
          [
            'name' => 'Colitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Colitis ulcerativa',
            'disease_id' => null,
          ],
          [
            'name' => 'Colon',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de colon',
            'disease_id' => null,
          ],
          [
            'name' => 'Infección del colon',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación del colon',
            'disease_id' => null,
          ],
          [
            'name' => 'Colon irritable',
            'disease_id' => null,
          ],
          [
            'name' => 'Limpiar el colon',
            'disease_id' => null,
          ],
          [
            'name' => 'Pólipos del colon',
            'disease_id' => null,
          ],
          [
            'name' => 'Transtornos del colon',
            'disease_id' => null,
          ],
          [
            'name' => 'Úlcera del colon',
            'disease_id' => null,
          ],
          [
            'name' => 'Concentración',
            'disease_id' => null,
          ],
          [
            'name' => 'Conjuntivitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Convulsiones',
            'disease_id' => null,
          ],
          [
            'name' => 'Corazón',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimular el corazón',
            'disease_id' => null,
          ],
          [
            'name' => 'Fortalecer el corazón',
            'disease_id' => null,
          ],
          [
            'name' => 'Debilidad',
            'disease_id' => null,
          ],
          [
            'name' => 'Debilidad cardiaca',
            'disease_id' => null,
          ],
          [
            'name' => 'Deficiencia de minerales',
            'disease_id' => null,
          ],
          [
            'name' => 'Demencia senil',
            'disease_id' => null,
          ],
          [
            'name' => 'Dengue',
            'disease_id' => null,
          ],
          [
            'name' => 'Depresión',
            'disease_id' => null,
          ],
          [
            'name' => 'Dermatitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Dermatitis atópica',
            'disease_id' => null,
          ],
          [
            'name' => 'Dermatitis de contacto',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxicación',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxicante',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxicante de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxicante del fumador de cigarrillo',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxicante del organismo',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxicante general',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxicante renal',
            'disease_id' => null,
          ],
          [
            'name' => 'Desnutrición',
            'disease_id' => null,
          ],
          [
            'name' => 'Desnutrición en aminoácidos',
            'disease_id' => null,
          ],
          [
            'name' => 'Desnutrición en la tercera edad',
            'disease_id' => null,
          ],
          [
            'name' => 'Desparasitante',
            'disease_id' => null,
          ],
          [
            'name' => 'Diabetes',
            'disease_id' => null,
          ],
          [
            'name' => 'Diarrea',
            'disease_id' => null,
          ],
          [
            'name' => 'Diarrea de paciente con sida',
            'disease_id' => null,
          ],
          [
            'name' => 'Diarrea infecciosa en los niños',
            'disease_id' => null,
          ],
          [
            'name' => 'Diente(s)',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor de diente(s)',
            'disease_id' => null,
          ],
          [
            'name' => 'Fortalecimiento de diente(s)',
            'disease_id' => null,
          ],
          [
            'name' => 'Digestión',
            'disease_id' => null,
          ],
          [
            'name' => 'Digestión lenta',
            'disease_id' => null,
          ],
          [
            'name' => 'Dispepsia',
            'disease_id' => null,
          ],
          [
            'name' => 'Diurético(a)',
            'disease_id' => null,
          ],
          [
            'name' => 'Diverticulosis',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor abdominal',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor de cabeza',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor por contusiones',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor general',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor reumático',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor muscular',
            'disease_id' => null,
          ],
          [
            'name' => 'Drogadicción',
            'disease_id' => null,
          ],
          [
            'name' => 'E.P.O.C',
            'disease_id' => null,
          ],
          [
            'name' => 'Eczema',
            'disease_id' => null,
          ],
          [
            'name' => 'Edema de miembros inferiores',
            'disease_id' => null,
          ],
          [
            'name' => 'Embarazo',
            'disease_id' => null,
          ],
          [
            'name' => 'Fortalece el embarazo',
            'disease_id' => null,
          ],
          [
            'name' => 'Encías',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de las encías',
            'disease_id' => null,
          ],
          [
            'name' => 'Sangrado de las encías',
            'disease_id' => null,
          ],
          [
            'name' => 'Endometriosis',
            'disease_id' => null,
          ],
          [
            'name' => 'Energía',
            'disease_id' => null,
          ],
          [
            'name' => 'Falta de energía',
            'disease_id' => null,
          ],
          [
            'name' => 'Enfermedad obstructiva crónica',
            'disease_id' => null,
          ],
          [
            'name' => 'Enfermedad respiratoria',
            'disease_id' => null,
          ],
          [
            'name' => 'Enfermedades bronquiales',
            'disease_id' => null,
          ],
          [
            'name' => 'Enjuague bucal',
            'disease_id' => null,
          ],
          [
            'name' => 'Envejecimiento celular',
            'disease_id' => null,
          ],
          [
            'name' => 'Envejecimiento prematuro',
            'disease_id' => null,
          ],
          [
            'name' => 'Envejecimiento de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Epilepsia',
            'disease_id' => null,
          ],
          [
            'name' => 'Erisipela',
            'disease_id' => null,
          ],
          [
            'name' => 'Esclerosis múltiple',
            'disease_id' => null,
          ],
          [
            'name' => 'Esófago',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de esófago',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación del esófago',
            'disease_id' => null,
          ],
          [
            'name' => 'Espasmos',
            'disease_id' => null,
          ],
          [
            'name' => 'Espasmos musculares',
            'disease_id' => null,
          ],
          [
            'name' => 'Espasmos nerviosos',
            'disease_id' => null,
          ],
          [
            'name' => 'Estómago',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de estómago',
            'disease_id' => null,
          ],
          [
            'name' => 'Células del estómago',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor de estómago',
            'disease_id' => null,
          ],
          [
            'name' => 'Estreñimiento',
            'disease_id' => null,
          ],
          [
            'name' => 'Estrés',
            'disease_id' => null,
          ],
          [
            'name' => 'Expectoración',
            'disease_id' => null,
          ],
          [
            'name' => 'Expectorante',
            'disease_id' => null,
          ],
          [
            'name' => 'Faringe',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de faringe',
            'disease_id' => null,
          ],
          [
            'name' => 'Faringitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Farmacodependencia',
            'disease_id' => null,
          ],
          [
            'name' => 'Fatiga',
            'disease_id' => null,
          ],
          [
            'name' => 'Fatiga cerebral',
            'disease_id' => null,
          ],
          [
            'name' => 'Fatiga crónica',
            'disease_id' => null,
          ],
          [
            'name' => 'Fatiga muscular',
            'disease_id' => null,
          ],
          [
            'name' => 'Fibromialgia',
            'disease_id' => null,
          ],
          [
            'name' => 'Fiebre',
            'disease_id' => null,
          ],
          [
            'name' => 'Fístula',
            'disease_id' => null,
          ],
          [
            'name' => 'Flacidez',
            'disease_id' => null,
          ],
          [
            'name' => 'Flacidez muscular',
            'disease_id' => null,
          ],
          [
            'name' => 'Flatulencia',
            'disease_id' => null,
          ],
          [
            'name' => 'Flexibilidad muscular',
            'disease_id' => null,
          ],
          [
            'name' => 'Flujos vaginales',
            'disease_id' => null,
          ],
          [
            'name' => 'Forúnculos',
            'disease_id' => null,
          ],
          [
            'name' => 'Fractura',
            'disease_id' => null,
          ],
          [
            'name' => 'Fragilidad capilar',
            'disease_id' => null,
          ],
          [
            'name' => 'Frigidez',
            'disease_id' => null,
          ],
          [
            'name' => 'Fumador de cigarrillo',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxicante para el fumador de cigarrillo',
            'disease_id' => null,
          ],
          [
            'name' => 'Garganta',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de garganta',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor de garganta',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de garganta',
            'disease_id' => null,
          ],
          [
            'name' => 'Irritacoión de garganta',
            'disease_id' => null,
          ],
          [
            'name' => 'Gases',
            'disease_id' => null,
          ],
          [
            'name' => 'Gastritis',
            'disease_id' => null,
          ],
          [
            'name' => 'Gastritis crónica',
            'disease_id' => null,
          ],
          [
            'name' => 'Gastritis sangrante',
            'disease_id' => null,
          ],
          [
            'name' => 'Gingivitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Glaucoma',
            'disease_id' => null,
          ],
          [
            'name' => 'Golpes',
            'disease_id' => null,
          ],
          [
            'name' => 'Gonorrea',
            'disease_id' => null,
          ],
          [
            'name' => 'Gota',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolores de la gota',
            'disease_id' => null,
          ],
          [
            'name' => 'Grasa',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxicante de la grasa',
            'disease_id' => null,
          ],
          [
            'name' => 'Gripa',
            'disease_id' => null,
          ],
          [
            'name' => 'Halitosis',
            'disease_id' => null,
          ],
          [
            'name' => 'Helicobacter pylori',
            'disease_id' => null,
          ],
          [
            'name' => 'Hemorragia',
            'disease_id' => null,
          ],
          [
            'name' => 'Hemorragia general',
            'disease_id' => null,
          ],
          [
            'name' => 'Hemorragia nasal',
            'disease_id' => null,
          ],
          [
            'name' => 'Hemorragia uterina',
            'disease_id' => null,
          ],
          [
            'name' => 'Hemorragia vaginal',
            'disease_id' => null,
          ],
          [
            'name' => 'Hemorroides',
            'disease_id' => null,
          ],
          [
            'name' => 'Hepatitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Heridas',
            'disease_id' => null,
          ],
          [
            'name' => 'Heridas abiertas',
            'disease_id' => null,
          ],
          [
            'name' => 'Cicatrizante de heridas',
            'disease_id' => null,
          ],
          [
            'name' => 'Desinfectante de heridas',
            'disease_id' => null,
          ],
          [
            'name' => 'Hernia hiatal',
            'disease_id' => null,
          ],
          [
            'name' => 'Herpes',
            'disease_id' => null,
          ],
          [
            'name' => 'Herpes labial',
            'disease_id' => null,
          ],
          [
            'name' => 'Herpes vaginal',
            'disease_id' => null,
          ],
          [
            'name' => 'Herpes zóster',
            'disease_id' => null,
          ],
          [
            'name' => 'Hidrocefalia',
            'disease_id' => null,
          ],
          [
            'name' => 'Hígado',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de hígado',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxicante del hígado',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimula el hígado',
            'disease_id' => null,
          ],
          [
            'name' => 'Hígado graso',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación del hígado',
            'disease_id' => null,
          ],
          [
            'name' => 'Regula el hígado',
            'disease_id' => null,
          ],
          [
            'name' => 'Virus en el hígado',
            'disease_id' => null,
          ],
          [
            'name' => 'Hiperacidez',
            'disease_id' => null,
          ],
          [
            'name' => 'Hiperactividad',
            'disease_id' => null,
          ],
          [
            'name' => 'Hiperactividad bronquial',
            'disease_id' => null,
          ],
          [
            'name' => 'Hipertensión arterial',
            'disease_id' => null,
          ],
          [
            'name' => 'Hipo',
            'disease_id' => null,
          ],
          [
            'name' => 'Hipotiroidismo',
            'disease_id' => null,
          ],
          [
            'name' => 'Histeria',
            'disease_id' => null,
          ],
          [
            'name' => 'Hongos',
            'disease_id' => null,
          ],
          [
            'name' => 'Huesos',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de huesos',
            'disease_id' => null,
          ],
          [
            'name' => 'Fortalecimiento de huesos',
            'disease_id' => null,
          ],
          [
            'name' => 'Impotencia',
            'disease_id' => null,
          ],
          [
            'name' => 'Inapetencia',
            'disease_id' => null,
          ],
          [
            'name' => 'Indigestión',
            'disease_id' => null,
          ],
          [
            'name' => 'Infarto cardiaco',
            'disease_id' => null,
          ],
          [
            'name' => 'Infarto cardiaco cerebral',
            'disease_id' => null,
          ],
          [
            'name' => 'Infección',
            'disease_id' => null,
          ],
          [
            'name' => 'Infección crónica',
            'disease_id' => null,
          ],
          [
            'name' => 'Infección de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Infección de los ojos',
            'disease_id' => null,
          ],
          [
            'name' => 'Infección del colon',
            'disease_id' => null,
          ],
          [
            'name' => 'Infección en la boca',
            'disease_id' => null,
          ],
          [
            'name' => 'Infección renal',
            'disease_id' => null,
          ],
          [
            'name' => 'Infección urinaria',
            'disease_id' => null,
          ],
          [
            'name' => 'Infección urinogenital',
            'disease_id' => null,
          ],
          [
            'name' => 'Infertilidad',
            'disease_id' => null,
          ],
          [
            'name' => 'Infertilidad femenina',
            'disease_id' => null,
          ],
          [
            'name' => 'Infertilidad masculina',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de amígdalas',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de articulaciones',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación del bazo',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación del colon',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de encías',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de esófago',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de faringe',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de garganta',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación general',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación del hígado',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación intestinal',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación laringe',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de nariz',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de oído',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de ojos',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación del páncreas',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de la próstata',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de los riñones',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de senos',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de la vejiga',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de vena várice',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de vesícula',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de vías urinarias',
            'disease_id' => null,
          ],
          [
            'name' => 'Insomnio',
            'disease_id' => null,
          ],
          [
            'name' => 'Insuficiencia',
            'disease_id' => null,
          ],
          [
            'name' => 'Insuficiencia renal',
            'disease_id' => null,
          ],
          [
            'name' => 'Insuficiencia venosa',
            'disease_id' => null,
          ],
          [
            'name' => 'Intestino',
            'disease_id' => null,
          ],
          [
            'name' => 'Intestino delgado',
            'disease_id' => null,
          ],
          [
            'name' => 'Intestino grueso',
            'disease_id' => null,
          ],
          [
            'name' => 'Intoxicación',
            'disease_id' => null,
          ],
          [
            'name' => 'Intoxicación con pescado o mariscos',
            'disease_id' => null,
          ],
          [
            'name' => 'Irradiación',
            'disease_id' => null,
          ],
          [
            'name' => 'Laringe',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de la laringe',
            'disease_id' => null,
          ],
          [
            'name' => 'Virus en la laringe',
            'disease_id' => null,
          ],
          [
            'name' => 'Laringitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Laxante',
            'disease_id' => null,
          ],
          [
            'name' => 'Leche materna',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimula la producción de leche materna',
            'disease_id' => null,
          ],
          [
            'name' => 'Lepra',
            'disease_id' => null,
          ],
          [
            'name' => 'Leucemia',
            'disease_id' => null,
          ],
          [
            'name' => 'Libido',
            'disease_id' => null,
          ],
          [
            'name' => 'Líneas de expresión',
            'disease_id' => null,
          ],
          [
            'name' => 'Evita las líneas de expresión',
            'disease_id' => null,
          ],
          [
            'name' => 'Linfoma',
            'disease_id' => null,
          ],
          [
            'name' => 'Linfoma de Hodgkin',
            'disease_id' => null,
          ],
          [
            'name' => 'Lipomas',
            'disease_id' => null,
          ],
          [
            'name' => 'Llenura',
            'disease_id' => null,
          ],
          [
            'name' => 'Lobanillo',
            'disease_id' => null,
          ],
          [
            'name' => 'Lumbago',
            'disease_id' => null,
          ],
          [
            'name' => 'Lumbalgia',
            'disease_id' => null,
          ],
          [
            'name' => 'Lupus',
            'disease_id' => null,
          ],
          [
            'name' => 'Lupus eritematoso sistémico',
            'disease_id' => null,
          ],
          [
            'name' => 'Mal aliento',
            'disease_id' => null,
          ],
          [
            'name' => 'Malaria',
            'disease_id' => null,
          ],
          [
            'name' => 'Manchas',
            'disease_id' => null,
          ],
          [
            'name' => 'Manchas en la cara',
            'disease_id' => null,
          ],
          [
            'name' => 'Manchas en las manos',
            'disease_id' => null,
          ],
          [
            'name' => 'Manguito rotador',
            'disease_id' => null,
          ],
          [
            'name' => 'Pérdida de masa muscular',
            'disease_id' => null,
          ],
          [
            'name' => 'Mastitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Médula ósea',
            'disease_id' => null,
          ],
          [
            'name' => 'Memoria',
            'disease_id' => null,
          ],
          [
            'name' => 'Memoria celular',
            'disease_id' => null,
          ],
          [
            'name' => 'Meningitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Menopausia',
            'disease_id' => null,
          ],
          [
            'name' => 'Menstruación',
            'disease_id' => null,
          ],
          [
            'name' => 'Falta de menstruación',
            'disease_id' => null,
          ],
          [
            'name' => 'Regula la menstruación',
            'disease_id' => null,
          ],
          [
            'name' => 'Metástasis',
            'disease_id' => null,
          ],
          [
            'name' => 'Evita la metástasis',
            'disease_id' => null,
          ],
          [
            'name' => 'Metástasis ósea',
            'disease_id' => null,
          ],
          [
            'name' => 'Miedo nocturno',
            'disease_id' => null,
          ],
          [
            'name' => 'Migraña',
            'disease_id' => null,
          ],
          [
            'name' => 'Miomas uterinos',
            'disease_id' => null,
          ],
          [
            'name' => 'Músculos',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimula los músculos',
            'disease_id' => null,
          ],
          [
            'name' => 'Relaja los músculos',
            'disease_id' => null,
          ],
          [
            'name' => 'Músculos faciales',
            'disease_id' => null,
          ],
          [
            'name' => 'Nariz',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de nariz',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de la nariz',
            'disease_id' => null,
          ],
          [
            'name' => 'Sangrado por la nariz',
            'disease_id' => null,
          ],
          [
            'name' => 'Náuseas',
            'disease_id' => null,
          ],
          [
            'name' => 'Nervios',
            'disease_id' => null,
          ],
          [
            'name' => 'Nerviosismo',
            'disease_id' => null,
          ],
          [
            'name' => 'Neumonía',
            'disease_id' => null,
          ],
          [
            'name' => 'Neuralgia',
            'disease_id' => null,
          ],
          [
            'name' => 'Neuropatía',
            'disease_id' => null,
          ],
          [
            'name' => 'Neuropatía diabética',
            'disease_id' => null,
          ],
          [
            'name' => 'Neurosis',
            'disease_id' => null,
          ],
          [
            'name' => 'Obesidad',
            'disease_id' => null,
          ],
          [
            'name' => 'Obesidad abdominal',
            'disease_id' => null,
          ],
          [
            'name' => 'Oido',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor de oído',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de oído',
            'disease_id' => null,
          ],
          [
            'name' => 'Virus en oído',
            'disease_id' => null,
          ],
          [
            'name' => 'Ojeras',
            'disease_id' => null,
          ],
          [
            'name' => 'Ojos',
            'disease_id' => null,
          ],
          [
            'name' => 'Cansancio en los ojos',
            'disease_id' => null,
          ],
          [
            'name' => 'Circulación en los ojos',
            'disease_id' => null,
          ],
          [
            'name' => 'infección en los ojos',
            'disease_id' => null,
          ],
          [
            'name' => 'Irritación en los ojos',
            'disease_id' => null,
          ],
          [
            'name' => 'Órgano sexual',
            'disease_id' => null,
          ],
          [
            'name' => 'Órgano sexual femenino',
            'disease_id' => null,
          ],
          [
            'name' => 'Órgano sexual masculino',
            'disease_id' => null,
          ],
          [
            'name' => 'Orzuelo',
            'disease_id' => null,
          ],
          [
            'name' => 'Osteopenia',
            'disease_id' => null,
          ],
          [
            'name' => 'Osteoporosis',
            'disease_id' => null,
          ],
          [
            'name' => 'Ovarios',
            'disease_id' => null,
          ],
          [
            'name' => 'Ovarios poliquísticos',
            'disease_id' => null,
          ],
          [
            'name' => 'Revitalizar los ovarios',
            'disease_id' => null,
          ],
          [
            'name' => 'Oxiuros',
            'disease_id' => null,
          ],
          [
            'name' => 'Panadizo',
            'disease_id' => null,
          ],
          [
            'name' => 'Páncreas',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de páncreas',
            'disease_id' => null,
          ],
          [
            'name' => 'Celúlas del páncreas',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxica el páncreas',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimula el páncreas',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación del páncreas',
            'disease_id' => null,
          ],
          [
            'name' => 'Revitaliza el páncreas',
            'disease_id' => null,
          ],
          [
            'name' => 'Pañalitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Papiloma vaginal',
            'disease_id' => null,
          ],
          [
            'name' => 'Parálisis facial',
            'disease_id' => null,
          ],
          [
            'name' => 'Paraparesia espástica',
            'disease_id' => null,
          ],
          [
            'name' => 'Parásitos',
            'disease_id' => null,
          ],
          [
            'name' => 'Parkinson',
            'disease_id' => null,
          ],
          [
            'name' => 'Parto',
            'disease_id' => null,
          ],
          [
            'name' => 'Acelerar el parto',
            'disease_id' => null,
          ],
          [
            'name' => 'Después del parto',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor del parto',
            'disease_id' => null,
          ],
          [
            'name' => 'Pie diabético',
            'disease_id' => null,
          ],
          [
            'name' => 'Piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Alergias en la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Células de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Comezón en la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Erupciones en la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimula el colágeno de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Flacidez en la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Piel grasosa',
            'disease_id' => null,
          ],
          [
            'name' => 'Grasa en la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Hongos en la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Humectante de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Infecciones de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamaciones de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Limpiar la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Manchas en la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Nutrir la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Peeling de piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Reafirmante de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Recuperar el manto ácido de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Relajante de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Resequedad en la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Piel seca',
            'disease_id' => null,
          ],
          [
            'name' => 'Sistema nervioso de la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Suaviza la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico para la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Úlceras en la piel',
            'disease_id' => null,
          ],
          [
            'name' => 'Piernas',
            'disease_id' => null,
          ],
          [
            'name' => 'Cansancio en las piernas',
            'disease_id' => null,
          ],
          [
            'name' => 'Circulación en las piernas',
            'disease_id' => null,
          ],
          [
            'name' => 'Frío en las piernas',
            'disease_id' => null,
          ],
          [
            'name' => 'Piojos',
            'disease_id' => null,
          ],
          [
            'name' => 'Plasma sistémico',
            'disease_id' => null,
          ],
          [
            'name' => 'Pólipos',
            'disease_id' => null,
          ],
          [
            'name' => 'Pólipos nasales',
            'disease_id' => null,
          ],
          [
            'name' => 'Pólipos rectales',
            'disease_id' => null,
          ],
          [
            'name' => 'Politraumatismo',
            'disease_id' => null,
          ],
          [
            'name' => 'Próstata',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de próstata',
            'disease_id' => null,
          ],
          [
            'name' => 'Hiperplasia de la próstata',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de la próstata',
            'disease_id' => null,
          ],
          [
            'name' => 'Prostatitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Protector hepático',
            'disease_id' => null,
          ],
          [
            'name' => 'Proteínas',
            'disease_id' => null,
          ],
          [
            'name' => 'Déficit de proteínas',
            'disease_id' => null,
          ],
          [
            'name' => 'Prurito',
            'disease_id' => null,
          ],
          [
            'name' => 'Psoriasis',
            'disease_id' => null,
          ],
          [
            'name' => 'Pulmón',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de pulmón',
            'disease_id' => null,
          ],
          [
            'name' => 'Púrpura trombocitopénica',
            'disease_id' => null,
          ],
          [
            'name' => 'Quemaduras',
            'disease_id' => null,
          ],
          [
            'name' => 'Quimioterapia',
            'disease_id' => null,
          ],
          [
            'name' => 'Radicales libres',
            'disease_id' => null,
          ],
          [
            'name' => 'Radioterapia',
            'disease_id' => null,
          ],
          [
            'name' => 'Rasquiña',
            'disease_id' => null,
          ],
          [
            'name' => 'Reconstituyente',
            'disease_id' => null,
          ],
          [
            'name' => 'Reflujo gastroesofágico',
            'disease_id' => null,
          ],
          [
            'name' => 'Repelente',
            'disease_id' => null,
          ],
          [
            'name' => 'Repelente de hormigas',
            'disease_id' => null,
          ],
          [
            'name' => 'Resaca',
            'disease_id' => null,
          ],
          [
            'name' => 'Resfriado',
            'disease_id' => null,
          ],
          [
            'name' => 'Retención de líquidos',
            'disease_id' => null,
          ],
          [
            'name' => 'Retención de líquidos en el abdomen',
            'disease_id' => null,
          ],
          [
            'name' => 'Retención de líquidos urinaria',
            'disease_id' => null,
          ],
          [
            'name' => 'Desprendimiento de retina',
            'disease_id' => null,
          ],
          [
            'name' => 'Retinopatía',
            'disease_id' => null,
          ],
          [
            'name' => 'Reumatismo',
            'disease_id' => null,
          ],
          [
            'name' => 'Rinitis alérgica',
            'disease_id' => null,
          ],
          [
            'name' => 'Riñones',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculos en los riñones',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de riñones',
            'disease_id' => null,
          ],
          [
            'name' => 'Sangre',
            'disease_id' => null,
          ],
          [
            'name' => 'Coagular la sangre',
            'disease_id' => null,
          ],
          [
            'name' => 'Déficit de oxígeno en la sangre',
            'disease_id' => null,
          ],
          [
            'name' => 'Desintoxicante de la sangre',
            'disease_id' => null,
          ],
          [
            'name' => 'Sangre en la orina',
            'disease_id' => null,
          ],
          [
            'name' => 'Limpia la sangre',
            'disease_id' => null,
          ],
          [
            'name' => 'Pérdida de sangre',
            'disease_id' => null,
          ],
          [
            'name' => 'Seborrea',
            'disease_id' => null,
          ],
          [
            'name' => 'Sedante',
            'disease_id' => null,
          ],
          [
            'name' => 'Seno(s)',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de seno',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de los senos',
            'disease_id' => null,
          ],
          [
            'name' => 'Sida',
            'disease_id' => null,
          ],
          [
            'name' => 'Diarrea de paciente con sida',
            'disease_id' => null,
          ],
          [
            'name' => 'Sífilis',
            'disease_id' => null,
          ],
          [
            'name' => 'Síndrome nefrótico',
            'disease_id' => null,
          ],
          [
            'name' => 'Sistema',
            'disease_id' => null,
          ],
          [
            'name' => 'Sistema defensivo',
            'disease_id' => null,
          ],
          [
            'name' => 'Levanta el sistema defensivo',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimula el sistema defensivo',
            'disease_id' => null,
          ],
          [
            'name' => 'Sistema digestivo',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimula el sistema digestivo',
            'disease_id' => null,
          ],
          [
            'name' => 'Sistema inmunológico',
            'disease_id' => null,
          ],
          [
            'name' => 'Levanta el sistema inmunológico',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimula el sistema inmunológico',
            'disease_id' => null,
          ],
          [
            'name' => 'Sistema nervioso',
            'disease_id' => null,
          ],
          [
            'name' => 'Sistema neurológico',
            'disease_id' => null,
          ],
          [
            'name' => 'Sistema óseo',
            'disease_id' => null,
          ],
          [
            'name' => 'Sobrepeso',
            'disease_id' => null,
          ],
          [
            'name' => 'Sordera',
            'disease_id' => null,
          ],
          [
            'name' => 'Taquicardia',
            'disease_id' => null,
          ],
          [
            'name' => 'Tendinitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Tendones',
            'disease_id' => null,
          ],
          [
            'name' => 'Tendones débiles',
            'disease_id' => null,
          ],
          [
            'name' => 'Tensión',
            'disease_id' => null,
          ],
          [
            'name' => 'Tensión arterial',
            'disease_id' => null,
          ],
          [
            'name' => 'Tensión mental y física',
            'disease_id' => null,
          ],
          [
            'name' => 'Tensión muscular',
            'disease_id' => null,
          ],
          [
            'name' => 'Tiroides',
            'disease_id' => null,
          ],
          [
            'name' => 'Alteraciones en la tiroides',
            'disease_id' => null,
          ],
          [
            'name' => 'Glándula tiroides',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico cardíaco',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico circulatorio',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico digestivo',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico estomacal',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico facial',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico general',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico hepático',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico muscular',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico nervioso',
            'disease_id' => null,
          ],
          [
            'name' => 'Tónico para aumentar el vigor sexual',
            'disease_id' => null,
          ],
          [
            'name' => 'Torceduras',
            'disease_id' => null,
          ],
          [
            'name' => 'Tos',
            'disease_id' => null,
          ],
          [
            'name' => 'Tranquilizante',
            'disease_id' => null,
          ],
          [
            'name' => 'Trastorno',
            'disease_id' => null,
          ],
          [
            'name' => 'Trastorno circulatorio',
            'disease_id' => null,
          ],
          [
            'name' => 'Trastorno nervioso',
            'disease_id' => null,
          ],
          [
            'name' => 'Triglicéridos',
            'disease_id' => null,
          ],
          [
            'name' => 'Tromboflebitis',
            'disease_id' => null,
          ],
          [
            'name' => 'Trombos',
            'disease_id' => null,
          ],
          [
            'name' => 'Evita la formación de trombos',
            'disease_id' => null,
          ],
          [
            'name' => 'Trombosis',
            'disease_id' => null,
          ],
          [
            'name' => 'Trombosis cerebral',
            'disease_id' => null,
          ],
          [
            'name' => 'Tuberculosis',
            'disease_id' => null,
          ],
          [
            'name' => 'Tumor',
            'disease_id' => null,
          ],
          [
            'name' => 'Tumor digestivo',
            'disease_id' => null,
          ],
          [
            'name' => 'Túnel carpiano',
            'disease_id' => null,
          ],
          [
            'name' => 'Úlcera',
            'disease_id' => null,
          ],
          [
            'name' => 'Úlcera duodenal',
            'disease_id' => null,
          ],
          [
            'name' => 'Úlcera gástrica',
            'disease_id' => null,
          ],
          [
            'name' => 'Úlcera varicosa',
            'disease_id' => null,
          ],
          [
            'name' => 'Uñas',
            'disease_id' => null,
          ],
          [
            'name' => 'Hongos en las uñas',
            'disease_id' => null,
          ],
          [
            'name' => 'Uñas quebradizas',
            'disease_id' => null,
          ],
          [
            'name' => 'Uretritis',
            'disease_id' => null,
          ],
          [
            'name' => 'Urticaria',
            'disease_id' => null,
          ],
          [
            'name' => 'Útero',
            'disease_id' => null,
          ],
          [
            'name' => 'Cáncer de útero',
            'disease_id' => null,
          ],
          [
            'name' => 'Células del útero',
            'disease_id' => null,
          ],
          [
            'name' => 'Estimula el útero',
            'disease_id' => null,
          ],
          [
            'name' => 'Revitaliza el útero',
            'disease_id' => null,
          ],
          [
            'name' => 'Vagina',
            'disease_id' => null,
          ],
          [
            'name' => 'Varicela',
            'disease_id' => null,
          ],
          [
            'name' => 'Vejiga',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculos en la vejiga',
            'disease_id' => null,
          ],
          [
            'name' => 'Células de la vejiga',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de la vejiga',
            'disease_id' => null,
          ],
          [
            'name' => 'Vejiga neurógena',
            'disease_id' => null,
          ],
          [
            'name' => 'Venas',
            'disease_id' => null,
          ],
          [
            'name' => 'Venas várices',
            'disease_id' => null,
          ],
          [
            'name' => 'Dolor de venas várices',
            'disease_id' => null,
          ],
          [
            'name' => 'Fortalece las venas várices',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de las venas várices',
            'disease_id' => null,
          ],
          [
            'name' => 'Manchas en las venas várices',
            'disease_id' => null,
          ],
          [
            'name' => 'Verrugas',
            'disease_id' => null,
          ],
          [
            'name' => 'Vértigo',
            'disease_id' => null,
          ],
          [
            'name' => 'Vesícula',
            'disease_id' => null,
          ],
          [
            'name' => 'Vesícula biliar',
            'disease_id' => null,
          ],
          [
            'name' => 'Cálculos en la vesícula',
            'disease_id' => null,
          ],
          [
            'name' => 'Inflamación de la vesícula',
            'disease_id' => null,
          ],
          [
            'name' => 'Limpia la vesícula',
            'disease_id' => null,
          ],
          [
            'name' => 'Vigor físico',
            'disease_id' => null,
          ],
          [
            'name' => 'Virosis',
            'disease_id' => null,
          ],
          [
            'name' => 'Virus',
            'disease_id' => null,
          ],
          [
            'name' => 'Virus del papiloma humano',
            'disease_id' => null,
          ],
          [
            'name' => 'Visión',
            'disease_id' => null,
          ],
          [
            'name' => 'Pérdida de la visión',
            'disease_id' => null,
          ],
          [
            'name' => 'Vitiligo',
            'disease_id' => null,
          ],
        ];

        Disease::insert($data);

        Disease::where('name', 'Amenaza de aborto')->update(['disease_id', Disease::where('name', 'Aborto')->first()->id]);
        Disease::where('name', 'Acidez estomacal')->update(['disease_id', Disease::where('name', 'Acidez')->first()->id]);
        Disease::where('name', 'Inflamación de las amígdalas')->update(['disease_id', Disease::where('name', 'Amígdalas')->first()->id]);
        Disease::where('name', 'Falta de ánimo')->update(['disease_id', Disease::where('name', 'Ánimo')->first()->id]);
        Disease::where('name', 'Ansiedad de comer')->update(['disease_id', Disease::where('name', 'Ansiedad')->first()->id]);
        Disease::where('name', 'Artritis reumatoidea')->update(['disease_id', Disease::where('name', 'Artritis')->first()->id]);
        Disease::where('name', 'Estimula el apetito')->update(['disease_id', Disease::where('name', 'Apetito')->first()->id]);
        Disease::where('name', 'Falta de apetito')->update(['disease_id', Disease::where('name', 'Apetito')->first()->id]);
        Disease::where('name', 'Arrugas en el cuello')->update(['disease_id', Disease::where('name', 'Arrugas')->first()->id]);
        Disease::where('name', 'Dilatador de las arterias')->update(['disease_id', Disease::where('name', 'Arterias')->first()->id]);
        Disease::where('name', 'Flexibilidad de las arterias')->update(['disease_id', Disease::where('name', 'Arterias')->first()->id]);
        Disease::where('name', 'Dolor en las articulaciones')->update(['disease_id', Disease::where('name', 'Articulaciones')->first()->id]);
        Disease::where('name', 'Inflamación en las articulaciones')->update(['disease_id', Disease::where('name', 'Articulaciones')->first()->id]);
        Disease::where('name', 'Cáncer de bazo')->update(['disease_id', Disease::where('name', 'Bazo')->first()->id]);
        Disease::where('name', 'Inflamación del bazo')->update(['disease_id', Disease::where('name', 'Bazo')->first()->id]);
        Disease::where('name', 'Aftas en la boca')->update(['disease_id', Disease::where('name', 'Boca')->first()->id]);
        /*Disease::where('name', 'Amenaza de aborto')->update(['disease_id', Disease::where('name', 'Aborto')->first()->id]);
        Disease::where('name', 'Amenaza de aborto')->update(['disease_id', Disease::where('name', 'Aborto')->first()->id]);
        Disease::where('name', 'Amenaza de aborto')->update(['disease_id', Disease::where('name', 'Aborto')->first()->id]);
        Disease::where('name', 'Amenaza de aborto')->update(['disease_id', Disease::where('name', 'Aborto')->first()->id]);
        Disease::where('name', 'Amenaza de aborto')->update(['disease_id', Disease::where('name', 'Aborto')->first()->id]);
        Disease::where('name', 'Amenaza de aborto')->update(['disease_id', Disease::where('name', 'Aborto')->first()->id]);
        Disease::where('name', 'Amenaza de aborto')->update(['disease_id', Disease::where('name', 'Aborto')->first()->id]);
        Disease::where('name', 'Amenaza de aborto')->update(['disease_id', Disease::where('name', 'Aborto')->first()->id]);
        Disease::where('name', 'Amenaza de aborto')->update(['disease_id', Disease::where('name', 'Aborto')->first()->id]);
        Disease::where('name', 'Amenaza de aborto')->update(['disease_id', Disease::where('name', 'Aborto')->first()->id]);
        */
    }
}

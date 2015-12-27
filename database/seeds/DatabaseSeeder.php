<?php

use App\Models\InfoPage;
use App\Models\Wheel;
use App\Models\Tire;
use App\Models\Disk;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('InfoPageTableSeeder');
		for($i=0; $i < 9; $i++){
			$this->call('WheelTableSeeder');
			/*$this->call('DiskTableSeeder');
			$this->call('TireTableSeeder');*/
		}
	}

}

class WheelTableSeeder extends Seeder
{
	public function run()
	{
		//DB::table('wheels')->delete();
		Wheel::create([
		'title' => 'pirelli',
		'img' => 'http://presentation/image/logo.png',
		'description' => 'Колёса новые. В отличном состоянии. Хорошие материалы и шипы. В наличии 4 штуки',
		'cost' => '5000',
		'cunt' => '4',
		'diametr' => '16',
		'width' => '55',
		'profile' => '15',
		'winter' => false,
		'PCD' => '5*100',
		'ET' => '50',
		'type' => 'Штампованные'
		]);
	}
}

class DiskTableSeeder extends Seeder
{
	public function run()
	{
		//DB::table('wheels')->delete();
		Disk::create([
				'title' => 'MOMO',
				'img' => 'http://presentation/image/momo.jpg',
				'description' => 'Диски новые. В отличном состоянии. Хорошие материалы. В наличии 4 штуки',
				'cost' => '6000',
				'cunt' => '4',
				'diametr' => '16',
				'width' => '55',
				'PCD' => '5*100',
				'ET' => '50',
				'type' => 'Штампованные'
		]);
	}
}

class TireTableSeeder extends Seeder
{
	public function run()
	{
		//DB::table('wheels')->delete();
		Tire::create([
				'title' => 'KAMA',
				'img' => 'http://presentation/image/kama.jpg',
				'description' => 'Резина новая. В отличном состоянии. Хорошие материалы и шипы. В наличии 4 штуки',
				'cost' => '5000',
				'cunt' => '4',
				'diametr' => '16',
				'width' => '55',
				'profile' => '15',
				'winter' => true,
		]);
	}
}

class InfoPageTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('info_pages')->delete();
		InfoPage::create([
				'title' => 'contacts',
				'header_text' => 'Контакты',
				'text' => 'Значимость этих проблем настолько очевидна, что консультация с широким активом позволяет оценить значение новых предложений. Не следует, однако забывать, что консультация с широким активом способствует подготовки и реализации дальнейших направлений развития.
							Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Не следует, однако забывать, что сложившаяся структура организации представляет собой интересный эксперимент проверки существенных финансовых и административных условий. Повседневная практика показывает, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Разнообразный и богатый опыт начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям. Разнообразный и богатый опыт новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании модели развития.
							Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную роль в формировании новых предложений. Идейные соображения высшего порядка, а также сложившаяся структура организации влечет за собой процесс внедрения и модернизации систем массового участия.
							Таким образом начало повседневной работы по формированию позиции способствует подготовки и реализации новых предложений. Идейные соображения высшего порядка, а также новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Равным образом сложившаяся структура организации позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач.',
		]);
		InfoPage::create([
				'title' => 'delivery',
				'header_text' => 'Доставка',
				'text' => 'Значимость этих проблем настолько очевидна, что консультация с широким активом позволяет оценить значение новых предложений. Не следует, однако забывать, что консультация с широким активом способствует подготовки и реализации дальнейших направлений развития.
							Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Не следует, однако забывать, что сложившаяся структура организации представляет собой интересный эксперимент проверки существенных финансовых и административных условий. Повседневная практика показывает, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Разнообразный и богатый опыт начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям. Разнообразный и богатый опыт новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании модели развития.
							Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную роль в формировании новых предложений. Идейные соображения высшего порядка, а также сложившаяся структура организации влечет за собой процесс внедрения и модернизации систем массового участия.
							Таким образом начало повседневной работы по формированию позиции способствует подготовки и реализации новых предложений. Идейные соображения высшего порядка, а также новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Равным образом сложившаяся структура организации позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач.',
		]);
		InfoPage::create([
				'title' => 'return',
				'header_text' => 'Возврат',
				'text' => 'Значимость этих проблем настолько очевидна, что консультация с широким активом позволяет оценить значение новых предложений. Не следует, однако забывать, что консультация с широким активом способствует подготовки и реализации дальнейших направлений развития.
							Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Не следует, однако забывать, что сложившаяся структура организации представляет собой интересный эксперимент проверки существенных финансовых и административных условий. Повседневная практика показывает, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Разнообразный и богатый опыт начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям. Разнообразный и богатый опыт новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании модели развития.
							Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную роль в формировании новых предложений. Идейные соображения высшего порядка, а также сложившаяся структура организации влечет за собой процесс внедрения и модернизации систем массового участия.
							Таким образом начало повседневной работы по формированию позиции способствует подготовки и реализации новых предложений. Идейные соображения высшего порядка, а также новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Равным образом сложившаяся структура организации позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач.',
		]);
		InfoPage::create([
				'title' => 'warranty',
				'header_text' => 'Оплата и Гарантии',
				'text' => 'Значимость этих проблем настолько очевидна, что консультация с широким активом позволяет оценить значение новых предложений. Не следует, однако забывать, что консультация с широким активом способствует подготовки и реализации дальнейших направлений развития.
							Задача организации, в особенности же рамки и место обучения кадров обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Не следует, однако забывать, что сложившаяся структура организации представляет собой интересный эксперимент проверки существенных финансовых и административных условий. Повседневная практика показывает, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании систем массового участия. Разнообразный и богатый опыт начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации системы обучения кадров, соответствует насущным потребностям. Разнообразный и богатый опыт новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании модели развития.
							Таким образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации новых предложений. Задача организации, в особенности же начало повседневной работы по формированию позиции играет важную роль в формировании новых предложений. Идейные соображения высшего порядка, а также сложившаяся структура организации влечет за собой процесс внедрения и модернизации систем массового участия.
							Таким образом начало повседневной работы по формированию позиции способствует подготовки и реализации новых предложений. Идейные соображения высшего порядка, а также новая модель организационной деятельности обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Равным образом сложившаяся структура организации позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач.',
		]);
	}
}

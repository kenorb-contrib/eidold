<?php

	class Center extends DB_Connect
	//class Center
	{
		public $markup = '';
		public function __construct($dbo=NULL)
		{
			parent::__construct($dbo);
		}//constructer
		//public function __construct(){}
		public function spit()
		{
			echo $this->markup;
				
		}
		
		public function error_page( $type ){
			if( !isset($_SESSION['user']) )
			{
				if ( $type == 'login_error' )
				{
					return '
					<div class="info_block" id="error_page_block">
							<h3 class="info_block_title">Error, You Must Login With Proper Infomation To Access This Page.</h3>	
					</div>';
				}
				else if ( $type == 'timeout_error' )
				{
					return '
					<div class="info_block" id="error_page_block">
							<h3 class="info_block_title">Error, Your Access Is Timeout. Please Login Again.</h3>	
					</div>';
				}
			}
		}
		
		public function welcome()
		{
			return '
			<div class="info_block_background">
				<div class="info_block first_info_block" id="slide_show_block">
					<div id="slide_show">
						<img src="img/2.jpg" alt="" />
						<img src="img/1.jpg" alt="" />
						
						<img src="img/3.jpg" alt="" />
						<img src="img/4.jpg" alt="" />
						
						<div class="caption"><h3>EID Is Located in Central Dublin - Merrion Square.</h3>
							<p>
								
							</p>
						</div>
						<div class="caption"><h3>EID Provides an Exellent Study Environment.</h3>
							<p>
								
							</p>
						</div>
						
						<div class="caption"><h3>English in Dublin Football Team Entering Higher Division.</h3>
							<p>
								
							</p>
						</div>
						<div class="caption"><h3>EID Organizes Social Events Throughout the Year.</h3>
							<p>
								
							</p>
						</div>
						
						
						<div id="stop_pause"></div>
						<div id="statement">
							<h3>Welcome to<br>English in Dublin</h3>
							<p>
								With a 25-year history and a dedication to the pursuit of excellence, 
								English in Dublin offers unique language learning experiences across a 
								broad spectrum of academic and social environments.
								English in Dublin - "<strong>We Help</strong> !"
							</p>
						</div>
					</div>
				</div>
			</div>';
		}
	
		public function news_events_block(){
			 
			return '
			<div class="info_block_background">
				<div class="info_block" id="news_block"><!--<h3 class="info_block_title">News & Events</h3>-->
						<div class="news_slide_block">
							<div class="news_slide_image">
								<img src="../public/img/25th_anniversary.jpg" alt="" />
								<img src="../public/img/11side.jpg" alt="" />								
								<img src="../public/img/pele.jpg" alt="" />
								<img src="../public/img/supporter.jpg" alt="" />
								<img src="../public/img/dublin.jpg" alt="" />
							</div>
							<div class="news_slide_text">
								<div class="caption"><h3>Celebrate English in Dublin\'s 25th Anniversary</h3>
									<p>
										This year, 2011, English in Dublin is proud to celebrate 25 years as a language school.
Over the years, we have had students from more than 45 countries! To celebrate our 25th
anniversary, we are having events and parties in the school throughout the year. Details
and updates can be found on our facebook page and on twitter.
									</p>
								</div>
								<div class="caption"><h3>EID 11-a-side Football Team</h3>
									<p>
										Sunday 15 May, we won the Bill Holmes Cup.
									</p>
								</div>
								
								<div class="caption"><h3>Denis and footballers meet Pele!</h3>
									<p>
										The famous Pele was in Dublin. Denis, the school director, and some of 
										our football players got a chance to meet him and get an autograph. Lucky!
									</p>
								</div>
								<div class="caption"><h3>Our Best Supporter</h3>
									<p>
										At the game in Herbert Park between EID and St. Pat`s, Denis with former great, 
										Chippy, who attends all our home games.
									</p>
								</div>
								<div class="caption"><h3>Dublin\'s Finest Cultural Attractions</h3>
									<p>
										Dublin Culture Trail takes you on a journey of discovery and adventure 
										through stunning videos and photographs of Dublin\'s museums, galleries, 
										historic buildings and cultural centres and introduces you to the people 
										and artists who make it all happen.
									</p>
								</div>
							</div>
							
						</div>
						
						<div id="thumbnail_block">
							<div class="thumbnail" id="first_thumbnail"><img src="../public/img/25th_anniversary.jpg" alt="" /></div>
							<div class="thumbnail"><img src="../public/img/11side.jpg"></div>							
							<div class="thumbnail"><img src="../public/img/pele.jpg"></div>
							<div class="thumbnail"><img src="../public/img/supporter.jpg"></div>
							<div class="thumbnail"><img src="../public/img/dublin.jpg"></div>
						</div>
			</div>
		</div>';
		}
		public function video_block(){
			return '
			<div class="info_block_background">
				<div class="info_block" id="video_b"><h3 class="info_block_title">Featured Videos</h3>
					<div id="video">
						<div class="video_block video_first_block">
							<a class="video_trigger" href="http://www.youtube.com/watch?v=d9fDq16stJY">
								<img src="../public/img/video1.png" />
							</a>EID Supports TAM Airline - Guniness
						</div>
						<div class="video_block">
							<a class="video_trigger" href="http://www.youtube.com/watch?v=lZ2Rhry8keA">
								<img src="../public/img/video2.png">
							</a>EID Supports TAM Airline - Dublin
						</div>
						<div class="video_block">
							<a class="video_trigger" href="http://www.youtube.com/watch?v=icXcHS7CyVE">
								<img src="../public/img/video3.png">
							</a>EID Supports TAM Airline - Temple Bar
						</div>
						<div class="video_block">
							<a class="video_trigger" href="http://www.youtube.com/watch?v=ZYdzk9eEiqU">
								<img src="../public/img/video4.png">
							</a>English in Dublin Culture
						</div>
						<div class="video_block">
							<a class="video_trigger" href="http://www.youtube.com/watch?v=5emdftOIoos">
								<img src="../public/img/video5.png">
							</a>Ireland in 2011
						</div>
						<div class="video_block">
							<a class="video_trigger" href="http://www.youtube.com/watch?v=kHBmFfEQjPs">
								<img src="../public/img/steven.png">
							</a>Stephen Talking About IELTS
						</div>
						<div class="video_block">
							<a class="video_trigger" href="http://www.youtube.com/watch?v=ClQqB1jg--c">
								<img src="../public/img/ielts8.png">
							</a></td>Student Passing IELTS with 8
						</div>
					</div>
				</div>
			</div>';
		}
		public function eid(){
			return '
			<div class="info_block_background">
		<div class="info_block first_info_block" id="eid_block">
			<h3 class="info_block_title">About English in Dublin</h3>
				<table class="info_table">
					<tr>
						<td><img src="../public/img/eid.jpg"></td>
						<td class="text_td"><p>Established in 1986, <span>English in Dublin</span> has grown to become a highly reputable English language school. Recognised by the Irish Department of Education and Science as an English language school, we provide general English courses (GE) at all main levels from elementary up to advanced level, as well as business English and exam preparation courses.</p>

<p>Our headquarters, a building of Georgian architecture, is located in the elegant and historic setting of Merrion Square, in the heart of Dublin City, minutes from the Natural History Museum, the National Gallery of Ireland, Trinity College and many shops, restaurants, cafes and bars.</p>

<p>We organize a lot of sport as well as high-quality academic courses. We were triple champions in football in 2008, winning the English Language Schools Championship, the SARI Cup and the Ireland League of Nations!</p>

<p>In 2004 <span>English in Dublin</span>\'s partner college, the College of Career Advancement (CCA), was set up. CCA provides business, marketing and photography courses, leading to awards from the London Chamber of Commerce and Industry Examinations Board, The Marketing Institute of Ireland, the University of London, and FETAC.</p>

<p>Our staff are dedicated to helping you achieve your academic goals, and we assess and respond to each student\'s needs individually.</p>

<p><span>Our motto is: "We help"</span>. I hope you decide to enrol with <span>English in Dublin</span>, and I look forward to meeting you shortly!</p></td>
					</tr>
				</table>
		</div>
		</div>';
		}
		public function contact_us(){
			return '
			<div class="info_block_background">
			<div class="info_block" id="contact_us_block">
				<div class="subpage_info">
					
					<div class="subpage_content">
						<h2 class="subpage_title">Contact us</h2>
						<div class="contact_side_block contact_text_block" id="telephone">
							<h3>Telephone</h3>
							<p>00353 87 231 0686</p>
							<p>00353 1 661 3788</p>
						</div>
						<div class="contact_side_block contact_text_block" id="fax">
							<h3>Fax</h3>
							<p>00353 1 661 5200</p>
						</div>
						<div class="contact_side_block contact_text_block" id="address">
							<h3>Address</h3>
							<p>No. 54, Merrion Square South,</p>
							<p>Dublin 2, Ireland</p>
						</div>
						<div class="contact_side_block contact_text_block" id="email">
							<h3>Email</h3>
							<p>info@englishindublin.ie</p>
						</div>
						<div class="contact_side_block" id="gps">
						<iframe width="890" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=54+Merrion+Square+South,+Dublin,+Ireland&amp;aq=2&amp;sll=37.0625,-95.677068&amp;sspn=38.281301,56.513672&amp;ie=UTF8&amp;hq=&amp;hnear=54+Merrion+Square+S,+Dublin+2,+Ireland&amp;ll=53.338305,-6.248045&amp;spn=0.017425,0.063429&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=54+Merrion+Square+South,+Dublin,+Ireland&amp;aq=2&amp;sll=37.0625,-95.677068&amp;sspn=38.281301,56.513672&amp;ie=UTF8&amp;hq=&amp;hnear=54+Merrion+Square+S,+Dublin+2,+Ireland&amp;ll=53.338305,-6.248045&amp;spn=0.017425,0.063429&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
						</div>
					</div>
				</div>
			</div>
			</div>';
		}
		public function how_to_book(){
			return '
			<div class="info_block_background">
				<div class="info_block first_info_block" id="how_to_book_block">
					<h3 class="info_block_title">How to Book</h3>
						<table class="info_table">
						<tr>
							<td><img src="../public/img/phone.jpg"></td>
							<td class="text_td"><p><span>The procedure for booking a course at English in Dublin as an international student is as follows:</span><p>
<ul>
<li>You submit an enquiry form, choosing the course and dates you are interested in booking.</li>
<li>An authorised representative of English in Dublin will contact you with details of enrolment procedures, student visas (where applicable), insurance, accommodation, airport transfers and billing methods.</li>
<li>You submit your completed enrolment form along with details of any payments you have made.</li>
<li>Once confirmation of full payment is received and all relevant requirements have been met, English in Dublin will provide you with a Confirmation Letter, which you must have with you to enter Ireland as a student and to be accepted at the school. It is imperative that you have this in your possession at the airport.</li>
<li>On your arrival at the school, you will complete the registration procedures. Please, be sure to bring your passport/ID with you on the first day.</li>
<li>In the case where a student is refused a visa, all fees will be returned with the exception of the registration fee, which is non-refundable.</li>
</ul>
</td>
						</tr>
						</table>
				</div>
				</div>';
		}
		public function staff(){
			return '
			<div class="info_block_background">
				<div class="info_block first_info_block" id="staff_block">
					<h3 class="info_block_title">English in Dublin Management & Staff</h3>
						<table class="info_table">
						
						<tr>
							<td class="img_td"><img src="../public/img/staff/034.jpg"></td>
							<td class="text_td"><h3>Denis O\'Donoghue</h3><p><strong>Director</strong></p><p>Founded the school in 1986. Celebrating 25 years in business.
Looking forward to the next 25 years.
His motto is : \'We help\'.</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/036.jpg"></td>
							<td class="text_td"><h3>Siobh&#225;n Smith</h3><p><strong>Administration Manager & Student Welfare Officer</strong></p><p>Siobhan Smith has a BSc (hons) in Retail and Services Management. Siobhan ensures that everything
runs smoothly at English in Dublin. In her free time, Siobhan enjoys travelling and
experiencing new cultures.</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/021.jpg"></td>
							<td class="text_td"><h3>Deborah McCloskey</h3><p><strong>Marketing Manager</strong></p><p>Deborah McCloskey has a BA (hons) in English Literature and Russian Studies and a
Post- Graduate Diploma in Academic Management. Deborah is the Marketing Manager
at English in Dublin and has travelled extensively visiting agents and attending Student
Fairs around the world.</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/001.jpg"></td>
							<td class="text_td"><h3>Andrew Wordsworth</h3><p><strong>Morning Academic Manager</strong></p><p>He tests students\'oral English
when they arrive and deals with all academic aspects at English in Dublin. Andrew has an
MA in TESOL and a Post-Graduate Diploma in Academic Management. He worked
in Italy before joining English in Dublin in 2005. He enjoys reading history books about
the ancient world.</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/027.jpg"></td>
							<td class="text_td"><h3>Mark Hennessy</h3><p><strong>Afternoon Academic Manager</strong></p><p>Mark has been with English in Dublin since 2006. He holds a BA (hons) in Humanities and English and a Licentiate Diploma in TESOL from Trinity College London. Mark also has a Diploma in English Language Studies and a Post-Graduate Diploma in Applied Linguistics. He is currently completing an MA in Education. </p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/003.jpg"></td>
							<td class="text_td"><h3>Donald Whitaker</h3><p><strong>Teacher</strong></p><p>After a career in Marketing, Donald Whitaker qualified as a TEFL teacher in 2005. Since
then, he has taught at English in Dublin at all levels, specialising in FCE, CAE, IELTS
and Business English.</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/014.jpg"></td>
							<td class="text_td"><h3>Stephen Bruce</h3><p><strong>Teacher</strong></p><p>Stephen joined English in Dublin in 2002. He holds a BA in
English and Philosophy, an MA in Philosophy and is currently finishing an M. Phil
in English Language Teaching from Trinity College Dublin. He spent one year
teaching in Italy and specialises in teaching IELTS and Cambridge exams.</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/005.jpg"></td>
							<td class="text_td"><h3>Annik Musgrave</h3><p><strong>Teacher</strong></p><p>Annik Musgrave has been at English in Dublin since 2005 and teaches FCE classes at English in Dublin.
Annik has a BA in French and Spanish from Trinity College. Annik trained to be a
teacher in London and spent some time volunteering in Peru. In her free time, she enjoys
reading, travelling and Zumba fitness.</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/009.jpg"></td>
							<td class="text_td"><h3>Jennie Blayney</h3><p><strong>Teacher</strong></p><p>Born and bred in Dublin\'s city centre, Jennie Blayney has recently qualified from Trinity
College with a Master\'s in Education. Jennie enjoys teaching exam classes and keeping
students motivated to improve their English, every day!</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/002.jpg"></td>
							<td class="text_td"><h3>John O\'Hara</h3><p><strong>Teacher</strong></p><p>John O\'Hara has been with English in Dublin since 2004. He spent 3 years teaching in Korea and
Barcelona and has a BA in English Literature and Geography, an MA in Globalisation as
well as an MA in Second Language Studies from University College Dublin.</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/010.jpg"></td>
							<td class="text_td"><h3>Jonathan Monaghan</h3><p><strong>Teacher</strong></p><p>Jonathan Monaghan has been at English in Dublin since 2008. He has a BA in English
Literature and has been teaching since 2004, both at home and abroad. Jonathan
specialises in IELTS preparation classes. He\'s a big football fan and is a great player too.</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/016.jpg"></td>
							<td class="text_td"><h3>Hannah Doherty</h3><p><strong>Teacher</strong></p><p>Hannah Doherty graduated from Trinity College Dublin with a degree in French and Italian. She
has worked as a translator and piano teacher and has taught various levels at English in
Dublin. Hannah loves travelling and learning about other cultures.</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/015.jpg"></td>
							<td class="text_td"><h3>Doireann Carr</h3><p><strong>Teacher</strong></p><p>Doireann Carr has a BA in English and Geography and worked in England and Spain
before joining English in Dublin. Doireann likes reading and listening to music and used to be a dance
teacher.</p></td>
						</tr>						
						<tr>
							<td class="img_td"><img src="../public/img/staff/008.jpg"></td>
							<td class="text_td"><h3>Ruth Griffin</h3><p><strong>Teacher</strong></p><p>Ruth Griffin has a BA in Fashion Design from the National College of Art and Design
Dublin, and a MA in History of Fashion from London College of Fashion. Ruth
has worked in the Fashion and EFL world for 8 years, teaching English and Fashion to
students at the University of the Arts Language Centre in London.</p></td>
						</tr>						
						<tr>
							<td class="img_td"><img src="../public/img/staff/004.jpg"></td>
							<td class="text_td"><h3>Jonathan Butler</h3><p><strong>Teacher</strong></p><p>Johnny Butler has been teaching English for over six years. He has a degree in Italian
and History from University College Dublin, having graduated in 1999. Johnny has a
reputation at English in Dublin for dynamic and enjoyable classes. He also writes articles
for several publications in Ireland.</p></td>
						</tr>
						
						<tr>
							<td class="img_td"><img src="../public/img/staff/029.jpg"></td>
							<td class="text_td"><h3>Kevin Treacy</h3><p><strong>Teacher</strong></p><p>Kevin Treacy has a BA in European Business and Languages, a CELTA and a Trinity College London
Diploma in TESOL. He\'s been teaching for 8 years and enjoys learning new languages.</p></td>
						</tr>
						<tr>
							<td class="img_td"><img src="../public/img/staff/006.jpg"></td>
							<td class="text_td"><h3>Barry Haugh</h3><p><strong>Teacher</strong></p><p>Barry Haugh has a BA in Philosophy. He is a keen fan of all things Italian. In his free
time, Barry enjoys singing and playing music.</p></td>
						</tr>
						</table>
				</div>
			</div>';
		}
		public function irish_visa(){
			return '
			<div class="info_block_background">
				<div class="info_block first_info_block" id="irish_visa_block">
					<h3 class="info_block_title">Irish Visa</h3>
						<table class="info_table">
						<tr>
							<td><img src="../public/img/visa.jpg"></td>
							<td class="text_td"><p><span>As an international student, you may or may not require an Irish study visa to live and work in Ireland.  Of course, EU students do not require a visa to study and work.</span></p>

<p><span>Non-EU Students: some do and some do not require a study visa.</span></p>
<p><span>Non-EU Students should:</span>
<ul>
    <li>contact the Irish Embassy in their country to see if they require one</li>
    <li>be aware of the difference between a \'C\' Study and a \'D\' Study visa</li>
    <li>apply 3 months in advance of a course commencing</li>
    <li>visit the Department of Justice, Equality and Law Reform, Ireland website at www.justice.ie for further information.</li>
	</ul>
	</p>

<p><span>Please Note:</span>
<ol>
<li>All non-EU students who register with the Garda National Immigration Bureau (GNIB) will have to study for a minimum of 15 hours per week.</li>
<li>Non-EU students who do not require a study visa, in the full sense, will still need proof of enrolment at our school to be allowed to enter Ireland as a student.</li>
<li>At any time, immigration officers may decide to refuse entry to Ireland even to students who have been granted a study visa.</li>
</ol>
</p>
</td>
						</tr>
						</table>
				</div>
				</div>';
		}
		
		public function courses_time_table(){
			return '
			<div class="info_block_background">
			<div class="info_block" id="time_table_block">
				<h3 class="info_block_title">Course Timetables</h3>
				<div id="time_table">
				<p><span>English in Dublin</span> provides a wide range of courses to satisfy all your English language needs.  Have a look at the table below to see which course times suit your level:</p>
					<table>
						<tr>
							<th id="first_th">Courses Available</th>
							<td class="time">Morning 9:00-12:15</td>
							<td class="time">Early Afternoon 12:45-16:00</td>
						</tr>
						<tr>
							<th>Elementary (General English)</th>
							<td>::</td>
							<td></td>
						</tr>
						<tr>
							<th>Pre-Intermediate (General English)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th>Intermediate (General English)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th>Upper Intermediate (General English)</th>
							<td>::</td>
							<td>::</td>
						</tr>
						<tr>
							<th>Advanced (General English)</th>
							<td>::</td>
							<td></td>
						</tr>
						<tr>
							<th class="special_th">IELTS Exam Preparation</th>
							<td class="special_td">::</td>
							<td class="special_td">::</td>
						</tr>
						<tr>
							<th class="special_th">CAE Exam Preparation</th>
							<td class="special_td">::</td>
							<td class="special_td"></td>
						</tr>
						<tr>
							<th class="special_th">FCE Exam Preparation</th>
							<td class="special_td">::</td>
							<td class="special_td">::</td>
						</tr>
						<!--<tr>
							<th>Business English</th>
							<td></td>
							<td>::</td>
						</tr>-->
					</table>
				</div>
			</div>
			</div>';	
		}
		public function explore_eid(){
			return '
			<div class="info_block_background">
				<div class="info_block" id="explore_block">
					<div id="explore">
						<div id="explore_icon"></div>
						<h3 id="info_block_title">explore english in dublin</h3>	
					</div>
				</div>
			</div>';
		}
		public function general_english(){
		return '
		<div class="info_block_background">
			<div class="info_block first_info_block" id="general_english_block">
				<h3 class="info_block_title">General English</h3>
					<table class="info_table">
					<tr>
						<td><img src="../public/img/mark.jpg"></td>
						<td class="text_td"><br><span>The General English Courses</span> are designed to give students maximum exposure to English in a relaxed and pleasant learning environment. The emphasis is on speaking, listening and reading, with grammar, writing and pronunciation also practised.<br><br>

Students are involved in task-based activities, which help them to improve their actual use of English by doing and solving various tasks and problems.<br><br>

We use the latest editions of English File, Cutting Edge, Inside Out and Headway coursebooks with accompanying DVDs, CDs, workbooks etc. and a library is available for extra materials. Students are provided with the textbook appropriate to their level for use during class time.<br><br>

Class atmosphere is also important and students are encouraged to participate as much as possible in their lessons with many students making new friends along the way...in English, of course!</td>
					</tr>
					</table>
			</div>
			</div>';
		}
		public function business_english(){
			return '
			<div class="info_block_background">
		<div class="info_block first_info_block" id="business_english_block">
			<h3 class="info_block_title">Business English</h3>
				<table class="info_table">
					<tr>
						<td><img src="../public/img/business.jpg"></td>
						<td class="text_td"><p>At <span>English in Dublin</span>, we care about your career. That is why we tailor the business course to your needs. Students wishing to do a business course complete a needs analysis, which the teacher uses to make the syllabus. At the end of the course, you can choose to do an internationally recognised business exam. English in Dublin\'s partner college, CCA is a registered examination centre for the London Chamber of Commerce and Industry Examinations Board (LCCIEB).</p></td>
					</tr>
				</table>
		</div>
		</div>';
		}
		
		public function calendar($_useDate=NULL, $_show=NULL){
			$useDate;
			$show;
			$calTable;
			$d;
			$m;
			$y;
			$daysInMonth;
			$startDay;
			$today = date('Y-m-d');
			$today_stamp = strtotime($today);
			$today_day = date('d', $today_stamp);
			$today_month = date('m', $today_stamp);
			$today_year = date('Y', $today_stamp);
			$processFile = "calendarProcess.php";
		
			if ( isset($_useDate)) {
				$useDate = $_useDate; 
				$show = $_show; 
			}
			
			else{ 
				$useDate = date('Y-m-d'); 
				$show = 'month';
			}
			
			$ts = strtotime($useDate);
			$d = date('d', $ts);
			$m = date('m', $ts);
			$y = date('Y', $ts);
			
			$sql = "SELECT event_id, date, time, event_title, event, location FROM calendar_info";
			$sql .= " WHERE MONTH(date) = ".$m.
					" AND YEAR(date) = ".$y.
					" ORDER BY date DESC,time ASC";
				
			$result = "";
			
			try{$db_selected = mysql_select_db(DB_NAME, $this->db);}
			catch(Exception $e){die($e->getMessage());}
			try{$result = mysql_query($sql);}
			catch(Exception $e){die($e->getMessage());}

			$events = array();
			$index = 0;
			while($row = mysql_fetch_array($result))
			{
				$events[$index] = new Event($row);
				$index++;
			}
			
			for($k=0 ; $k<count($events) ;$k++){
				$calTable .='
				<tr onclick="window.location.href=&#39;view_event.php?event_id='.$events[$k]->_event_id.'&#39;">
					<td class="info_date">'.$events[$k]->_date.'</td>
					<td class="info_time">'.$events[$k]->_time.'</td>
					<td class="info_event">
					'.$events[$k]->_event_title.'
					</td>					
					<td class="info_location">'.$events[$k]->_location.'</td>
				</tr>';	
			}

			$daysInMonth = cal_days_in_month(
					CAL_GREGORIAN,
					$m,
					$y
					);
			$ts = mktime(0,0,0,$m,1,$y);
			$startDay = date('w',$ts);
			
			$markup = '
			<div class="info_block_background">
			<div class="info_block first_info_block" id="calendar_block">
			<h3 class="info_block_title">English in Dublin Calendar</h3>
			<table id="calendar_wrap">
			<tr><td id="calendar_td_1">
				<table id="calendar">
					<tr>
						<th id="pre"><a href="'.$processFile.'?useDay='.$d.'&useMonth='.$m.'&useYear='.$y.'&action=pre">&laquo;</a></th>
						<th id="date"colspan="5">'.$m .' - '. $y.'</th>
						<th id="next"><a href="'.$processFile.'?useDay='.$d.'&useMonth='.$m.'&useYear='.$y.'&action=next">&raquo;</a></th>
					</tr>
					<tr>
						<th>S</th>
						<th>M</th>
						<th>T</th>
						<th>W</th>
						<th>T</th>
						<th>F</th>
						<th>S</th>
					</tr>';
			
			$day = 0;
			$day_number = 1;
			for( $i = 0 ; $i < 6 ; $i++ )
			{
				$markup.= '<tr>';
				for($j = 0 ; $j < 7 ;$j++ )
				{
					if( $day < $startDay || $day_number > $daysInMonth) $markup .= '<td class="empty"></td>';
					else{
						if($day_number == $today_day && $m == $today_month && $y == $today_year)
							$markup .= 
							'<a href="'.$processFile.'?useDay=N/A&useMonth='.$m.'&useYear='.$y.'&action=day">
							<td class="non_empty today">'.$day_number.'</td></a>';
						else
							$markup .= 
							'<a href="'.$processFile.'?useDay=N/A&useMonth='.$m.'&useYear='.$y.'&action=choose_a_day">
							<td class="non_empty">'.$day_number.'</td></a>';
						$day_number++;
					}
					$day++;
				}
				$markup.= '</tr>';
				
			}
			
			$markup .= '</table>
			</td>
			<td>
			<table id="calendar_info">
				<tr>
					
					<th>Date</th>
					<th>Time</th>
					<th>Event</th>
					<th>Location</th>
				</tr>';
			if(trim($calTable) == '')
			{
				$calTable = '
				<tr>
					<td id="no_data" colspan="4">
						The events in this month is currently under the process of updating.
					</td>
				</tr>';
			}
			$markup .= $calTable;
			$markup .= '</table></td></tr>';
			if(isset($_SESSION['user']))
			{
			$markup .= '<tr>
				<td>
					<a href="admin.php"><div class="link_button">add a new event</div></a>
				</td>
			</tr>';
			}
			$markup .='</table></div></div>';
			
			return $markup;
		}
		
		
		public function displayEventForm()
		{
			if ( isset($_POST['event_id']))
			{
				$id = (int) $_POST['event_id'];
			}
			else
			{
				$id=NULL;
			}
			$submit = 'Create a New Event';
			if(!empty($id))
			{
				$event = $this->_loadEventById($id);
				if(!is_object($event)) {return NULL;}
				$submit = "Update This Event";
			}
			
			$markup = '
			<div class="info_block first_info_block" id="event_form_block">
			<h3 class="info_block_title">'.$submit.'</h3>
			<form action = "admin_process.php" method="post">
				<fieldset>
					<label for="event_title">Event Title</label>
					<input type="text" name="event_title" id="event_title" value="'.$event->_event_title.'"/>
					<label for="event_date">Event Date ( yyyy-mm-dd )</label>
					<input type="text" name="event_date" id="event_date" value="'.$event->_date.'"/>
					<label for="event_time">Event Time ( hh:mm )</label>
					<input type="text" name="event_time" id="event_time" value="'.$event->_time.'"/>
					<label for="event_lacation">Event Location</label>
					<input type="text" name="event_location" id="event_location" value="'.$event->_location.'"/>
					<label for="event_description">Event Description</label>
					<textarea name="event_description" id="event_description">'.$event->_event.'</textarea>
					<input type="hidden" name="event_id" value="'.$id.'" />
					<input type="hidden" name="token" value="'.$_SESSION['token'].'" />
					<input type="hidden" name="action" value="event_edit" />
					<input type="submit" name="event_submit" value="'.$submit.'"/>
				</fieldset>
			</form>
			</div>
			';
			return $markup;
		}
		
		public function confirmDelete($id)
		{
			if ( empty($id)) {return NULL;}
			$id = preg_replace('/[^0-9]/', '',$id);			

			if(isset($_POST['confirm_delete']) && $_POST['token'] == $_SESSION['token'])
			{
				
				if($_POST['confirm_delete'] == "Yes, Delete It .")
				{
					$sql = "DELETE FROM calendar_info WHERE event_id='".$id."' LIMIT 1";
					try {$db_selected = mysql_select_db(DB_NAME, $this->db);}
					catch(Exception $e) { die($e->getMessage()); }
					try 
					{ 
						mysql_query($sql); 
						$this->markup.=($this->calendar());
						//$this->spit();
						return;
					}
					catch ( Exception $e) { return $e->getMessage(); }
				}
				else
				{
					$this->markup.=($this->calendar());
					//$this->spit();
					return;
				}
			}
			
			$event = $this->_loadEventById($id);
			if(!is_object($event)) { header("Location:index.php");}
			
			return
			'<div class="info_block first_info_block" id="confirmDelete_block">
			<form action="confirmDelete.php" method="post">
				<h3>Are you sure you want to delete "'.$event->_event_title.'"?</h3>
				<p>There is <strong>NO UNDO</strong> if you continue .</p><br/><br/>
				<p>
					<input type="submit" name="confirm_delete" value="Yes, Delete It ."/>
					<input type="submit" name="confirm_delete" value="Nope! Just Kidding !" />
					<input type="hidden" name="event_id" value="'.$event->_event_id.'" />
					<input type="hidden" name="token" value="'.$_SESSION['token'].'"/>
				</p>
			</form>
			</div>';
		}
		
		
		public function processForm()
		{
			if($_POST['action'] != 'event_edit')
			{
				return 'Wrong Action';
			}
			$title = htmlentities($_POST['event_title'], ENT_QUOTES);
			$date = htmlentities($_POST['event_date'], ENT_QUOTES);
			$time = htmlentities($_POST['event_time'], ENT_QUOTES);
			$location = htmlentities($_POST['event_location'], ENT_QUOTES);
			$desc = htmlentities($_POST['event_description'], ENT_QUOTES);
			
			if( empty($_POST['event_id']))
			{
				$sql = "INSERT INTO calendar_info VALUES ('', '".$date."', '".$time."', '".$title."', '".$desc."','".$location."');";
			}
			else
			{
				$id = (int) $_POST['event_id'];
				$sql = "UPDATE calendar_info
						SET event_title='$title',event='$desc',date='$date',time='$time',location='$location' WHERE event_id='$id'";
			}
			try {$db_selected = mysql_select_db(DB_NAME, $this->db);}
			catch(Exception $e) { die($e->getMessage()); }
			try {
				mysql_query($sql);
				return TRUE;
			}
			catch ( Exception $e) { return $e->getMessage(); }
		}
		
		
		public function displayEvent($id)
		{
			if ( empty($id) ) { return NULL; }
			$id = preg_replace('/[^0-9]/','',$id);
			$event = $this->_loadEventById($id);
			$markup = '
			<div class="info_block first_info_block" id="event_block">
				<h2>'.$event->_event_title.'</h2>
				<p>'.$event->_date.', '.$event->_time.', '.$event->_location.'</p>
				<p class="event_discription">'.$event->_event.'</p>';
			if(isset($_SESSION['user']))
			{
				$markup.='
				<table class="admin_control">
					<tr>
						'.$this->_adminEntryOption($id).'
					</tr>
				</table>';
			}
			$markup.='</div>';
			return $markup;
		}
		
		
		private function _loadEventById($id)
		{
			if(empty($id)){return NULL;}
			$event=$this->_loadEventData($id);
			$row = mysql_fetch_array($event);
			if(isset($row)) {return new Event($row);}
			else return NULL;
		}
		
		
		private function _loadEventData($id)
		{
			if(empty($id)){return NULL;}
			$sql = "SELECT event_id, date, time, event_title, event, location FROM calendar_info";
			$sql .= " WHERE event_id = ".$id." LIMIT 1";
			$result = "";
			try{$db_selected = mysql_select_db(DB_NAME, $this->db);}
			catch(Exception $e){die($e->getMessage());}
			try{$result = mysql_query($sql);}
			catch(Exception $e){die($e->getMessage());}
			return $result;
		}
		
		
		private function _adminEntryOption($id)
		{
			return'
			<div class="admin-options">
			<form action="admin.php" method="post">
					<input type="submit" name="edit_event" value="Edit This Event"/>
					<input type="hidden" name="event_id" value="'.$id.'" />
			</form>
			<form action="confirmDelete.php" method="post">
					<input type="submit" name="delete_event" value="Delete This Event"/>
					<input type="hidden" name="event_id" value="'.$id.'" />
			</form>
			</div>';
			
		}
		
		
		public function college_courses(){
			return '
			<div class="info_block_background">
		<div class="info_block first_info_block" id="college_courses_block">
			<h3 class="info_block_title">College Courses</h3>
				<table class="info_table">
					<tr>
						<td><img src="../public/img/college.jpg"></td>
						<td class="text_td"><p>The <span>College of Career Advancement (CCA)</span> is registered as a Further Education and Training Awards Council (FETAC) provider. As the national awarding body for further education and training in Ireland, FETAC gives people the opportunity to gain recognition for learning in education or training centres, in the work place and in the community.</p>

<p>The College of Career Advancement offers a variety of FETAC courses:
	<ul>
    <li>Business Management FETAC Level 6</li>
    <li>Business Administration FETAC Level 5</li>
    <li>Communications FETAC Level 3</li>
    <li>Communications FETAC Level 4</li>
    <li>Communications FETAC Level 5</li>
    <li>International Trade FETAC Level 5</li>
	</ul></p></td>
					</tr>
				</table>
		</div>
		</div>';
		}
		
		public function exam_courses(){
			$markup = '
			<div class="info_block_background">
			<div class="info_block first_info_block" id="exam_courses_block">
				<h3 class="info_block_title">Examination Courses</h3>
					<table class="info_table">
						<tr>
							<td><img src="../public/img/stephen.jpg"></td>
							<td class="text_td"><br>English in Dublin currently provides assistance and preparation for the following exams:
							<ul>
							<li>IELTS (International English Language Testing System, Cambridge ESOL, UK/Australia)</li>
							<li>FCE (First Certificate in English, Cambridge ESOL, UK)</li>
							<li>CAE  (Certificate in Advanced English, Cambridge ESOL, UK)</li>
							<!--<li>PET (Preliminary English Test, Cambridge ESOL, UK</li>-->
							<li>TIE (Test of Interactive English, ACELS Ireland)</td></li>
							</ul>
						</tr>
					</table>
			</div>
			</div>';
			
			$markup .= '
			<div class="info_block_background">
			<div class="info_block" id="exams">
				<div class="tab_block" id="exam_tab_block">
					
					<div class="tab" id="tie"><span>TIE</span></div>
					<!--<div class="tab" id="pet"><span>PET</span></div>-->
					<div class="tab" id="cae"><span>CAE</span></div>
					<div class="tab" id="fce"><span>FCE</span></div>
					
					<div class="tab first_tab" id="ielts"><span>IELTS</span></div>
					<div class="tab_screen" id="exam_tab_screen">
						<div class="tab_content">
							<h3>International English Language Testing System</h3>
							<table>
								<tr>
									<td>
										<a class="video_trigger" href="http://www.youtube.com/watch?v=kHBmFfEQjPs">
											<img src="../public/img/steven.png">
										</a></td>
									<td>
										<p>IELTS is run in conjunction with Cambridge ESOL, the British Council and IDP: IELTS Australia. More than 1 million people a year are now using IELTS to enhance their career opportunities throughout the English-speaking world. IELTS is recognized by more than 6,000 organizations worldwide. The tests are available in more than 120 countries in over 500 locations, with test dates available up to four times a month.<br><br>
				
				These courses are designed for exam preparation, and it is assumed that students are already at, or very close to, the required standard of English. They focus on the format of the exam and the various types of exercises and questions it contains. Well-known Cambridge First Certificate and IELTS preparation textbooks are used as well as exam practice books and past papers.<br><br>
				
				Watch one of our teachers, Stephen Bruce, talk about the IELTS exam - why it\'s important, and why it\'s a good idea to attend the IELTS exam preparation courses.
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<a class="video_trigger" href="http://www.youtube.com/watch?v=ClQqB1jg--c">
											<img src="../public/img/ielts8.png">
										</a></td>
									<td>
										<p>Leticia Pinhero Correa, aged 20, from Sao Paolo, Brazil, is celebrating an overall Grade 8 in the IELTs exam. Before coming to Dublin, Leticia was studying Biology at university and is now returning to completing her studies as she wants to work with animals, the environment and wildlife - in Africa!</p>

<p>Leticia arrived in Dublin on 16 April, 2009, she started learning English at A2 level, pre-intermediate, then progressed through the levels.</p> 

<p>She got a B in FCE in December 2009, and then she wanted to have the IELTS just to see how she would do and took the exam in April.</p> 

<p>Leticia puts her exam success down to remaining calm under pressure but we think she made the very most of her time here.</p>
										</p>
									</td>
								</tr>
								<tr>
									<td>
										<img src="../public/img/student.jpg">
									</td>
									<td>
										<p>
										Stefania graduated in International Relations and Human Rights last November and I immediately started looking for an International Master in Europe that could suit me well. Unfortunately, at that time my English war very rusty and I feared I wouldn\'t be able to get the IELTS certificate that all European Universities require for the admission.</p>
					
					<p>For this reason I decided to travel to Dublin and to stay there one month, in order to brush up on my English and to attend an IELTS course. I chose the "English in Dublin" School since it offers a full time IELTS course and amazing services (Internet connection, study rooms, flexible timetables, highly competitive prices and a central position).</p>
					
					<p>The IELTS course at EID is a great opportunity for students like me who need a fast and intensive preparation: every day the course covers all the four parts of the IELTS exam (Listening, Reading, Writing and Speaking), therefore all the students have the chance to deepen their knowledge on their soft spots and at the same time to keep practicing and improving their previously acquired skills.</p>
					
					<p>The lessons are very well organised and highly interactive: the teacher gives space to every student and everyone can tell what he/she thinks about a certain topic. The atmosphere is very stimulating and educative because you deepen your knowledge by listening to different opinions and at the same time you get prepared for the IELTS.</p>
					
					<p>Besides attending morning classes, I also tried to be always prepared and to improve my weak spots (Reading and Listening in particular) by practising alone a few hours per week, since my IELTS exam was due in a month\'s time.</p>
					
					<p>My IELTS teacher has always been very helpful and supportive: everyday he gave me extra homework and some useful advice, he corrected all my writings and he taught me interesting methods to be successful. I finished my course on Friday and on Saturday I was sitting the IELTS exam at University College Dublin. The results were unbelievable: my overall band was 8! I was very surprised because I got great results precisely were I had to improve: 9 in the Reading and 8 in the Listening.</p>
					
					<p>EID gave me a unique opportunity to improve my English in a wonderful international and challenging environment!
										</p>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			</div>';
			return $markup;
		}
		public function fees(){
			$markup='';
			$full_time_price =
			'Duration::Tuition Fees 15 hrs/week::Tuition Fees 21 hrs/week::Tuition Fees 24 hrs/week::Tuition Fees 30 hrs/week::Registration Fee||
			1  week::&#8364;150::&#8364;210::&#8364;250::&#8364;300::nil||
			2  week::&#8364;300::&#8364;420::&#8364;500::&#8364;600::nil||
			3  week::&#8364;450::&#8364;630::&#8364;750::&#8364;900::nil||
			4  week::&#8364;600::&#8364;840::&#8364;1000::&#8364;1200::nil||
			5  week::&#8364;735::&#8364;1030::&#8364;1225::&#8364;1470::nil||
			6  week::&#8364;870::&#8364;1220::&#8364;1450::&#8364;1740::nil||
			7  week::&#8364;1005::&#8364;1405::&#8364;1675::&#8364;2010::nil||
			8  week::&#8364;1140::&#8364;1595::&#8364;1900::&#8364;2280::nil||
			9  week::&#8364;1260::&#8364;1765::&#8364;2100::&#8364;2520::nil||
			10 week::&#8364;1380::&#8364;1930::&#8364;2300::&#8364;2760::nil||
			Duration::Tuition Fees 15 hrs/week::Tuition Fees 21 hrs/week::Tuition Fees 24 hrs/week::Tuition Fees 30 hrs/week::Registration Fee||
			11 week::&#8364;1500::&#8364;2100::&#8364;2500::&#8364;3000::nil||
			12 week::&#8364;1620::&#8364;2270::&#8364;2700::&#8364;3240::nil||
			13 week::&#8364;1700::&#8364;2380::&#8364;2835::&#8364;3400::nil||
			14 week::&#8364;1780::&#8364;2490::&#8364;2965::&#8364;3560::&#8364;50||
			15 week::&#8364;1860::&#8364;2605::&#8364;3100::&#8364;3720::&#8364;50||
			16 week::&#8364;1940::&#8364;2715::&#8364;3235::&#8364;3880::&#8364;50||
			17 week::&#8364;2020::&#8364;2830::&#8364;3365::&#8364;4040::&#8364;50||
			18 week::&#8364;2100::&#8364;2940::&#8364;3500::&#8364;4200::&#8364;50||
			19 week::&#8364;2180::&#8364;3050::&#8364;3635::&#8364;4360::&#8364;50||
			20 week::&#8364;2260::&#8364;3165::&#8364;3765::&#8364;4520::&#8364;50||
			Duration::Tuition Fees 15 hrs/week::Tuition Fees 21 hrs/week::Tuition Fees 24 hrs/week::Tuition Fees 30 hrs/week::Registration Fee||
			21 week::&#8364;2340::&#8364;3275::&#8364;3900::&#8364;4680::&#8364;50||
			22 week::&#8364;2420::&#8364;3390::&#8364;4035::&#8364;4840::&#8364;50||
			23 week::&#8364;2500::&#8364;3500::&#8364;4165::&#8364;5000::&#8364;50||
			24 week::&#8364;2580::&#8364;3610::&#8364;4300::&#8364;5160::&#8364;50||
			25 week::&#8364;2660::&#8364;3725::&#8364;4435::&#8364;5320::&#8364;50||
			26 week::&#8364;2740::&#8364;3835::&#8364;4565::&#8364;5480::&#8364;50||
			27 week::&#8364;2820::&#8364;3950::&#8364;4700::&#8364;5640::&#8364;50||
			28 week::&#8364;2900::&#8364;4060::&#8364;4835::&#8364;5800::&#8364;50||
			29 week::&#8364;2980::&#8364;4170::&#8364;4965::&#8364;5960::&#8364;50||
			30 week::&#8364;3060::&#8364;4285::&#8364;5100::&#8364;6120::&#8364;50||
			Duration::Tuition Fees 15 hrs/week::Tuition Fees 21 hrs/week::Tuition Fees 24 hrs/week::Tuition Fees 30 hrs/week::Registration Fee||
			33 week::&#8364;3300::&#8364;4620::&#8364;5500::&#8364;6600::&#8364;50||
			35 week::&#8364;3460::&#8364;4845::&#8364;5770::&#8364;6920::&#8364;50||
			40 week::&#8364;3860::&#8364;5405::&#8364;6435::&#8364;7720::&#8364;50||
			50 week::&#8364;4664::&#8364;6525::&#8364;7765::&#8364;9320::&#8364;50||';
			
			$part_time_price = 
			'Duration::Tuition Fees::Registration Fee||
			1 week::&#8364;50::&#8364;20||
			2 week::&#8364;100::&#8364;20||
			3 week::&#8364;130::&#8364;20||
			4 week::&#8364;165::&#8364;20||
			5 week::&#8364;200::&#8364;20||
			6 week::&#8364;235::&#8364;20||
			7 week::&#8364;270::&#8364;20||
			8 week::&#8364;305::&#8364;20||
			9 week::&#8364;340::&#8364;20||
			10 week::&#8364;375::&#8364;20||
			Duration::Tuition Fees::Registration Fee||
			11 week::&#8364;400::&#8364;20||
			12 week::&#8364;445::&#8364;20||
			13 week::&#8364;480::&#8364;20||
			14 week::&#8364;515::&#8364;20||
			15 week::&#8364;550::&#8364;20||
			16 week::&#8364;585::&#8364;20||
			17 week::&#8364;620::&#8364;20||
			18 week::&#8364;655::&#8364;20||
			19 week::&#8364;690::&#8364;20||
			20 week::&#8364;725::&#8364;20||
			Duration::Tuition Fees::Registration Fee||
			21 week::&#8364;760::&#8364;20||
			22 week::&#8364;795::&#8364;20||
			23 week::&#8364;830::&#8364;20||
			24 week::&#8364;865::&#8364;20||
			25 week::&#8364;900::&#8364;20||
			26 week::&#8364;935::&#8364;20||
			27 week::&#8364;970::&#8364;20||
			28 week::&#8364;1005::&#8364;20||
			29 week::&#8364;1040::&#8364;20||
			30 week::&#8364;1075::&#8364;20||
			Duration::Tuition Fees::Registration Fee||
			31 week::&#8364;1110::&#8364;20||
			32 week::&#8364;1145::&#8364;20||
			33 week::&#8364;1180::&#8364;20||
			34 week::&#8364;1215::&#8364;20||
			35 week::&#8364;1250::&#8364;20||
			36 week::&#8364;1285::&#8364;20||
			37 week::&#8364;1320::&#8364;20||
			38 week::&#8364;1355::&#8364;20||
			39 week::&#8364;1390::&#8364;20||
			40 week::&#8364;1425::&#8364;20||
			Duration::Tuition Fees::Registration Fee||
			41 week::&#8364;1460::&#8364;20||
			42 week::&#8364;1495::&#8364;20||
			43 week::&#8364;1530::&#8364;20||
			44 week::&#8364;1565::&#8364;20||
			45 week::&#8364;1600::&#8364;20||
			46 week::&#8364;1635::&#8364;20||
			47 week::&#8364;1670::&#8364;20||
			48 week::&#8364;1705::&#8364;20||
			';
			$full_time_price_split = explode("||",$full_time_price);
			$part_time_price_split = explode("||",$part_time_price);
			 $markup .= '
			 <div class="info_block_background">
		<div class="info_block first_info_block" id="fees_block">
			<h3 class="info_block_title">Course Fees</h3>
				<table class="info_table">
					<tr>
						<td><img src="../public/img/fees.jpg"></td>
						<td class="text_td"><br>English in Dublin offers very competitive prices for an English school in Dublin with such an excellent reputation. All our teachers are native speakers of English, have a minimum of 2 years of teaching experience and are fully qualified to help you reach your English language learning goals.
					</tr>
				</table>
		</div>
		</div>';
			$markup .= '<div class="info_block_background">
			<div class="info_block" id="fees_full_time_table">
							<h3 class="info_block_title">Full Time Fees</h3>
							<table class="fees_table">';
			for ($i = 0; $i < count($full_time_price_split)-1; ++$i){
				$row = explode("::",$full_time_price_split[$i]);
				if ($i%2 == 0) $markup .= '<tr class="tr_even">';
				else $markup .= '<tr class="tr_odd">';
				for($j = 0; $j < count($row); $j++){
					if ($i%11 == 0)
					$markup .= '<th>'.$row[$j].'</th>';
					else
					$markup .= '<td>'.$row[$j].'</td>';
				}
				$markup .= '</tr>';
			}
			
			$markup .='</table></div></div>';
			
			$markup .= '<div class="info_block_background"><div class="info_block" id="fees_part_time_table">
							<h3 class="info_block_title">Part Time Fees ( 6 hours per week )</h3>
							<table class="fees_table">';
			for ($i = 0; $i < count($part_time_price_split)-1; ++$i){
				$row = explode("::",$part_time_price_split[$i]);
				if ($i%2 == 0) $markup .= '<tr class="tr_even">';
				else $markup .= '<tr class="tr_odd">';
				for($j = 0; $j < count($row); $j++){
					if ($i%11 == 0)
					$markup .= '<th>'.$row[$j].'</th>';
					else
					$markup .= '<td>'.$row[$j].'</td>';
				}
				$markup .= '</tr>';
			}
			
			$markup .='</table></div></div>';
			return $markup;
		}
		public function airport_transfer(){
			return '
			<div class="info_block_background">
		<div class="info_block first_info_block" id="airport_transfer_block">
			<h3 class="info_block_title">Airport Transfer</h3>
				<table class="info_table">
					<tr>
						<td><img src="../public/img/airport.jpg"></td>
						<td class="text_td"><p>Airport transfers can be arranged by a school representative, who will meet students at the airport and bring them to their host family.</p>

<p>Students availing of an airport transfer should:
	<ul>
    <li>Inform the school of their flight details at least 10 days prior to their arrival</li>
    <li>Pay &#8364;100 in addition to their tuition fee.</li>
	</ul>
<p>If a transfer is not required, students may take a taxi or bus from the airport. For information on buses and bus timetables, please, visit <a href="http://www.dublinbus.ie">www.dublinbus.ie.</a></p></td>
					</tr>
				</table>
		</div>
		</div>';
		}
		public function accomodation(){
			return '
			<div class="info_block_background">
			<div class="info_block first_info_block" id="accomodation_block">
				<h3 class="info_block_title">Accomodation</h3>
					<table class="info_table">
						<tr>
							<td><img src="../public/img/accomodation.jpg"></td>
							<td class="text_td"><p><span>Accommodation for students :</span>
	<ul>
    <li>is arranged by the English in Dublin Accommodation Office</li>
    <li>is made with the best families available in Dublin, who are caring, friendly and supportive</li>
    <li>is located approximately 8 kilometres (KM) or less from the city centre, close to convenient bus and light rail routes</li>
    <li>is available on a full-board basis, that is, bed, breakfast, packed lunch and evening meal for a flat rate of:
		
		Registration Fee:  &#8364; 20
			<ul>
		   <li>Peak season (July and August):
		   	  <ul>
				  <li>Sharing:  &#8364; 180</li>
				  <li>Single:  &#8364; 190</li>
			  </ul>
		   </li>
		   <li>Off peak season (From September to June):
		   	<ul>
			 <li>Sharing:  &#8364; 170</li>
			  <li>Single:  &#8364; 180</li>
			  </ul>
			  </li>
		</ul>
	</li>
	</ul>
<span>Please note that we can not guarantee accommodation for students with host families over the Christmas period, typically from the 22/12 - 02/01.</span></p></td>
						</tr>
					</table>
			</div>
			</div>';
		}
		public function medical_insurance(){
			return '
			<div class="info_block_background">
		<div class="info_block first_info_block" id="medical_insurance_block">
			<h3 class="info_block_title">Medical Insurance</h3>
				<table class="info_table">
					<tr>
						<td><img src="../public/img/medical.jpg"></td>
						<td class="text_td"><p><span>Students should obtain medical and/or travel insurance in their own country prior to departure.</span>
						<ul>

<li>EU students should bring their European Health Insurance Card (The old form E111) with them.</li>
<li>Non-EU students must have full private medical insurance if they require a visa. This can be arranged by English in Dublin and included in the fee structure as follows:
	<ul>	
		<li>&#8364; 100 for any period up to 52 weeks.</li>
		<li>Students can collect insurance details on their first day at school.</li>
	</ul>
</li>
					</ul>
					</p></td>
					</tr>
				</table>
		</div>
		</div>';
		}
		public function emergency(){
			return '
			<div class="info_block_background">
		<div class="info_block first_info_block" id="emergency_block">
			<h3 class="info_block_title">Emergency</h3>
				<table class="info_table">
					<tr>
						<td><img src="../public/img/emergency.jpg"></td>
						<td class="text_td"><p>A 24-hour emergency telephone number is provided to all host families in case a problem of a serious nature arises. The school can also call on hospitals, doctors, dentists and other health professionals if a student requires attention. Where the student does not have adequate English, a translator is close by to help.
					</p></td>
					</tr>
				</table>
		</div>
		</div>';
		}
		public function on_arrival(){
			return '
			<div class="info_block_background">
		<div class="info_block first_info_block" id="on_arrival_block">
			<h3 class="info_block_title">On Arrival</h3>
				<table class="info_table">
					<tr>
						<td><img src="../public/img/reception.jpg"></td>
						<td class="text_td"><p><span>On arrival at the school, students need to:</span>
<ol>
<li><span>Register</span> at reception. Students must bring their passport and their offer letter.</li>
<li>Take a <span>placement test</span> to determine their level of English, after which they will be placed in a class suited to their ability.</li>
</ol>
					</p></td>
					</tr>
				</table>
		</div>
		</div>';
		}
		public function dublin_weather(){
			return '
			<div class="info_block_background">
			<div class="info_block first_info_block" id="dublin_weather_block">
				<h3 class="info_block_title">Weather in Dublin</h3>
					<table class="info_table">
						<tr>
							<td><img src="../public/img/weather.jpg"></td>
							<td class="text_td"><p><span>Ireland</span> has a temperate climate, influenced by the relatively warm waters of the Gulf Stream, in whose path the island lies. During the winter months, temperatures rarely drop below freezing, and snow is uncommon.</p>
							<p>The coldest and wettest months are December, January and February, which means temperatures of between 4&#8451;and 7&#8451;. July and August are the warmest months with mean temperatures of between 14&#8451; and 16&#8451;, rarely rising above 22&#8451;.</p>

<p>Go to the <a href="http://www.met.ie/forecasts/county.asp">MET Ireland website</a> for the latest information on the weather in Dublin.</p>
						</p></td>
						</tr>
					</table>
			</div>
			</div>';
		}
		public function korean_school(){
			return '
			<div class="info_block_background">
				<div class="info_block first_info_block" id="korean_school_block">
					<h3 class="info_block_title">Korean School in Dublin</h3>
						<table class="info_table">
							<tr>
								<td><img src="../public/img/korean.jpg"></td>
								<td class="text_td">

<p><span>The Korean School in Dublin</span> helps Korean children to learn about different cultures, thus enhancing their appreciation of their peers. The Korean School in Dublin provides a creative environment where children\'s cognitive, social, emotional, and physical development can be expanded.</p>

<p>Language skills are developed through reading stories, songs, music, circle-time, discussion and conversation with peers and teachers. The children and teachers are always respected and trusted.</p>
<p>The school also provides opportunities for adults who are non-Korean speaker to learn Korean at different levels.</p>
<p><span>Courses:</span>
<ul>
	<li>Level 1:
		<ul>
			<li>Cherry</li>
			<li>Lemon</li>
		</ul>
	</li>
	<li>Level 2:
		<ul>
			<li>Melon</li>
			<li>Orange</li>
		</ul>
	</li>
	<li>Level 3:
		<ul>
			<li>Banana</li>
			<li>Kiwi</li>
		</ul>
	</li>
	<li>Adult:
		<ul>
			<li>Adult Class</li>
		</ul>
	</li>
</ul>
<span>Note: The classes are open only on Saturday. Within the same level, the two different types of fruit represent different classes. Our Korean staff will be more than happy to help anyone interested in the courses. Just contact us!</span></p>
							</td>
							</tr>
						</table>
				</div>
			</div>';
		}
		public function holiday(){
				return '
				<div class="info_block_background">
		<div class="info_block first_info_block" id="holiday_block">
			<h3 class="info_block_title">School Holidays</h3>
				<table class="info_table">
					<tr>
						<td><img src="../public/img/holiday.jpg"></td>
						<td class="text_td"><p><span>English in Dublin</span> is closed for a brief period around Christmas every year. Details for 2011/12 are as follows : the last day of school in 2011 will be Friday, 16 December, and the first day of school in 2012 will be Tuesday, 3 January.</p>

<p>There are currently<span> 9 official public holidays</span> in Ireland.</p>

<p>Date Holiday</p>
<ul>
<li>January 1    New Year\'s Day</li>
<li>March 17    St. Patrick\'s Day</li>
<li>Easter Monday    April Holiday</li>
<li>First Monday in May    May Holiday</li>
<li>First Monday in June    June Holiday</li>
<li>First Monday in August    August Holiday</li>
<li>Last Monday in October    October Holiday</li>
<li>December 25    Christmas Day</li>
<li>December 26    St. Stephen\'s Day</li>
</ul>

<p>English in Dublin will be closed for these dates. There is no discount or refund for any days missed due to Public Holidays
					</p></td>
					</tr>
				</table>
		</div>
		</div>';
		}
		public function about_dublin(){
			return '
			<div class="info_block_background">
			<div class="info_block first_info_block" id="about_dublin_block">
				<h3 class="info_block_title">About Dublin</h3>
					<table class="info_table">
						<tr>
							<td id="about_dublin_slide_show_imgs">
							<img src="../public/img/dublin_bridge.jpg">
								<img src="../public/img/dart.jpg">
								<img src="../public/img/Temple_Bar.jpg">
			
								<img src="../public/img/ifsc.jpg">
								<img src="../public/img/guiness.png">
								<img src="../public/img/dollymount.jpg">
							</td>
							<td class="text_td"><p><span>Dublin</span> is a vibrant, modern city and has some special advantages for those seeking to come here to study - Dubliners are friendly and love to talk, and you can easily meet other young people. In this way, Dublin offers many opportunities for students to engage in stimulating and enriching conversations.</p>

<p>Dublin also provides an ideal cultural environment for academic study as a great historical city with a strong literary tradition. Many Irish writers and musicians have come to enjoy a world-wide reputation.</p>

<p>Have a look at the links below which provide more information about things to do and see, and how to get there.
<ul>
<li>Dublin Tourism: www.dublintourist.com</li>
<li>Visit Dublin: www.visitdublin.com</li>
<li>Dublin Bus:  www.dublinbus.ie</li>
<li>D.A.R.T (train): www.irishrail.ie </li>
<li>LUAS (tram): www.luas.ie</li>
</ul>
						</p></td>
						</tr>
					</table>
			</div>
			</div>';
		}
		public function tesol(){
			return '
			<div class="info_block_background">
				<div class="info_block first_info_block" id="tesol_block">
					<h3 class="info_block_title">TESOL</h3>
					<table class="info_table">
						<tr>
							<td class="text_td">
							<h3>What Is TESOL?</h3>
							<p>TESOL (also known as TEFL) is the acronym for Teaching English to Speakers of Other Languages and taking a TESOL course is your passport to a world of travel and adventure teaching English abroad. There is a tremendous demand for TESOL qualified teachers worldwide with job opportunities in just about every country around the globe.
							</p>
							
							<h3>What TESOL courses and qualifications are available?</h3>
							<p>TESOL (also known as TEFL) is the acronym for Teaching English to Speakers of Other Languages and taking a TESOL course is your passport to a world of travel and adventure teaching English abroad. There is a tremendous demand for TESOL qualified teachers worldwide with job opportunities in just about every country around the globe.
							</p>
							
							<h3>Who can take a TESOL course?</h3>
							<p>TESOL courses are open to all native or fluent English speakers. There is no requirement to have any previous teaching experience or qualifications. There is no strict age limit and each application for one of our TESOL courses is given full consideration. We welcome all applications regardless of sex, age, race or nationality.
							</p>
							</td>
						</tr>
					</table>
				</div>
			</div>';
		}
		public function teacher_staff(){}
		public function location(){}
		public function event(){}
		public function gallery(){}
		public function videos(){}
	}
?>

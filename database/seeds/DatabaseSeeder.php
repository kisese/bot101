<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// $this->call(UsersTableSeeder::class);
// check if table users is empty
        if (DB::table('quotes')->get()->count() == 0) {

            DB::table('quotes')->insert([

                [
                    'author' => 'Napoleon Hill',
                    'quote' => 'The world has the habit of making room for the man whose words and actions show that he knows where he is going',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'James Allen',
                    'quote' => 'Circumstance does not make the man; it reveals him to himself',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Michelangelo',
                    'quote' => 'The greater danger for most of us is not that our aim is too high and we miss it, but that it is too low and we reach it',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Michelangelo',
                    'quote' => 'The greater danger for most of us is not that our aim is too high and we miss it, but that it is too low and we reach it',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'John Kehoe',
                    'quote' => 'Your life is in your hands, to make of it what you choose',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Jim Rohn',
                    'quote' => 'Let others lead small lives, but not you. Let others argue over small things, but not you. Let others cry over small hurts, but not you. Let others leave their future in someone else\'s hands, but not you.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Anthony Robbins',
                    'quote' => 'I challenge you to make your life a masterpiece. I challenge you to join the ranks of those people who live what they teach, who walk their talk.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Brian Tracy',
                    'quote' => 'Issue a blanket pardon. Forgive everyone who has ever hurt you in any way. Forgiveness is a perfectly selfish act. It sets you free from the past',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Ralph Waldo Emerson',
                    'quote' => 'Our greatest glory is not in never failing but in rising up every time we fail)',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Earl Nightingale',
                    'quote' => 'Learn to enjoy every minute of your life. Be happy now. Don\'t wait for something outside of yourself to make you happy in the future. Think how really precious is the time you have to spend, whether it\'s at work or with your family. Every minute should be enjoyed and savoured.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Theodore Roosevelt',
                    'quote' => 'Far better it is to dare mighty things, to win glorious triumphs, even though chequered by failure, than to take rank with those poor souls who neither enjoy much nor suffer much, because they live in the grey twilight that knows neither victory nor defeat.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Aristotle',
                    'quote' => 'We are what we repeatedly do. Excellence, then, is not an act, but a habit.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Napoleon Bonaparte',
                    'quote' => 'Impossible is a word to be found only in the dictionary of fools.);authorsDbAdapter.insertauthor(Mark Twain, Twenty years from now you will be more disappointed by the things that you didn\'t do than by the ones you did do. So throw off the bowlines. Sail away from the safe harbour. Catch the trade winds in your sails. Explore. Dream. Discover.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Arthur C. Clarke',
                    'quote' => 'The only way of finding the limits of the possible is by going beyond them into the impossible.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Theodore Roosevelt',
                    'quote' => 'It is hard to fail, but it is worse never to have tried to succeed.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Publius Terence',
                    'quote' => 'Fortune favours the brave.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Robert Browning',
                    'quote' => 'Ah, but a man\'s reach should exceed his grasp, or what\'s a heaven for?',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Zig Ziglar',
                    'quote' => 'People often say that motivation doesn\'t last. Well, neither does bathing - that\'s why we recommend it daily.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Napoleon Hill',
                    'quote' => 'Desire is the starting point of all achievement, not a hope, not a wish, but a keen pulsating desire, which transcends everything.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Norman Vincent Peale',
                    'quote' => 'People become really quite remarkable when they start thinking that they can do things. When they believe in themselves they have the first secret of success.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Henry David Thoreau',
                    'quote' => 'Men are born to succeed, not fail.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Anthony Robbins',
                    'quote' => 'What we can or cannot do, what we consider possible or impossible, is rarely a function of our true capability. It is more likely a function of our beliefs about who we are.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Stephen Covey',
                    'quote' => 'Every human has four endowments- self-awareness, conscience, independent will and creative imagination. These give us the ultimate human freedom... The power to choose, to respond, to change.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Napoleon Hill',
                    'quote' => 'All the breaks you need in life wait within your imagination, Imagination is the workshop of your mind, capable of turning mind energy into accomplishment and wealth.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Euripides',
                    'quote' => 'There is just one life for each of us: our own.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Alexander Woollcott',
                    'quote' => 'There is no such thing in anyone\'s life as an unimportant day.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Brian Tracy',
                    'quote' => 'All successful people men and women are big dreamers. They imagine what their future could be, ideal in every respect, and then they work every day toward their distant vision, that goal or purpose.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Mark Twain',
                    'quote' => 'The fear of death follows from the fear of life. A man who lives fully is prepared to die at any time.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Deepak Chopra',
                    'quote' => 'There are no accidents... there is only some purpose that we haven\'t yet understood.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Virgil',
                    'quote' => 'They can because they think they can.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Jeune.E. McIntyre.',
                    'quote' => 'There are those who dream and wish and there are those who dream and work.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'William Feather',
                    'quote' => 'No man is a failure who is enjoying life.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Don Miguel Ruiz',
                    'quote' => 'Death is not the biggest fear we have; our biggest fear is taking the risk to be alive -- the risk to be alive and express what we really are.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Wayne Dyer',
                    'quote' => 'Be miserable. Or motivate yourself. Whatever has to be done, it\'s always your choice.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Deepak Chopra',
                    'quote' => 'You and I are essentially infinite choice-makers. In every moment of our existence, we are in that field of all possibilities where we have access to an infinity of choices.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Abraham Lincoln',
                    'quote' => 'You can have anything you want, if you want it badly enough. You can be anything you want to be, do anything you set out to accomplish if you hold to that desire with singleness of purpose.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Abraham H. Maslow',
                    'quote' => 'If you deliberately plan on being less than you are capable of being, then I warn you that you\'ll be unhappy for the rest of your life.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Dale Carnegie',
                    'quote' => 'Remember, happiness doesn\'t depend upon who you are or what you have, it depends solely upon what you think.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Theodore Roosevelt',
                    'quote' => 'The only man who never makes mistakes is the man who never does anything.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Harry Emerson Fosdick',
                    'quote' => 'Self-pity gets you nowhere. One must have the adventurous daring to accept oneself as a bundle of possibilities and undertake the most interesting game in the world -- making the most of one\'s best.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Oliver Wendell Holmes, Jr',
                    'quote' => 'Man\'s mind, once stretched by a new idea, never regains its original dimensions.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Socrates',
                    'quote' => 'The nearest way to glory is to strive to be what you wish to be thought to be.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Charles Schwab',
                    'quote' => 'The man who trims himself to suit everybody will soon whittle himself away.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Lee Jampolsky',
                    'quote' => 'At least three times every day take a moment and ask yourself what is really important. Have the wisdom and the courage to build your life around your answer.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Ralph Waldo Emerson',
                    'quote' => 'To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Unknown',
                    'quote' => 'It’s not who you are that holds you back, it’s who you think you’re not.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Bruce Lee',
                    'quote' => 'Simplicity is the key to brilliance.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Federico Fellini',
                    'quote' => 'There is no end. There is no beginning. There is only the infinite passion of life.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Og Mandino',
                    'quote' => 'Work as though you would live forever, and live as though you would die today.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Napoleon Hill',
                    'quote' => 'What the mind of man can conceive and believe, the mind of man can achieve.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Earl of Chesterfield',
                    'quote' => 'Know the true value of time; snatch, seize, and enjoy every moment of it. No idleness, no delay, no procrastination; never put off till tomorrow what you can do today.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Ralph Waldo Emerson',
                    'quote' => 'Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Pope John XXIII',
                    'quote' => 'Consult not your fears but your hopes and your dreams. Think not about your frustrations, but about your unfulfilled potential. Concern yourself not with what you tried and failed in, but with what it is still possible for you to do.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Margaret Thatcher',
                    'quote' => 'Look at a day when you are supremely satisfied at the end. It\'s not a day when you lounge around doing nothing, it\'s when you\'ve had everything to do and you\'ve done it.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Mahatma Gandhi',
                    'quote' => 'You must be the change you wish to see in the world.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Eleanor Roosevelt',
                    'quote' => 'The future belongs to those who believe in the beauty of their dreams.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Deepak Chopra',
                    'quote' => 'Everything that is happening at this moment is a result of the choices you\'ve made in the past.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Napoleon Hill',
                    'quote' => 'Cherish your visions and your dreams, as they are the children of your soul, the blueprints of your ultimate achievements.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Wayne Dyer',
                    'quote' => 'Successful people make money. It\'s not that people who make money become successful, but that successful people attract money. They bring success to what they do.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Henry Ford',
                    'quote' => 'Failure is simply the opportunity to begin again, this time more intelligently.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Napoleon Bonaparte',
                    'quote' => 'Victory belongs to the most persevering.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'James Allen',
                    'quote' => 'Dream lofty dreams, and as you dream, so you shall become. Your vision is the promise of what you shall one day be; your ideal is the prophecy of what you shall at last unveil.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Mike Murdock',
                    'quote' => 'You will never possess what you are unwilling to pursue.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Lao-Tzu',
                    'quote' => 'He who controls others may be powerful, but he who has mastered himself is mightier still.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Anthony Robbins',
                    'quote' => 'I\'ve come to believe that all my past failure and frustrations were actually laying the foundation for the understandings that have created the new level of living I now enjoy.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Erica Jong',
                    'quote' => 'If you don\'t risk anything, then you risk even more.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Zig Ziglar',
                    'quote' => 'It was character that got us out of bed, commitment that moved us into action, and discipline that enabled us to follow through.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Buddha',
                    'quote' => 'No matter how hard the past, you can always begin again.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Buddha',
                    'quote' => 'The secret of health for both mind and body is not to mourn for the past, not to worry about the future, nor to anticipate troubles, but to live in the present moment wisely and earnestly.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Albert Einstein',
                    'quote' => 'There are only two ways to live your life. One is as though nothing is a miracle. The other is as if everything is.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Henry David Thoreau',
                    'quote' => 'Go confidently in the direction of your dreams. Live the life you\'ve imagined.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'T. S. Elliot',
                    'quote' => 'Only those who will risk going too far can possibly find out how far one can go.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Buddha',
                    'quote' => 'All that we are is the result of what we have thought.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Seneca',
                    'quote' => 'It is not because things are difficult that we do not dare, it is because we do not dare that they are difficult.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Ralph Waldo Emerson',
                    'quote' => 'It was a high counsel that I once heard given to a young person, \Always do what you are afraid to do.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Jim Rohn',
                    'quote' => 'The best motivation is self-motivation. The guy says, “I wish someone would come by and turn me on.” What if they don’t show up? You’ve got to have a better plan for your life.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Andre Gide',
                    'quote' => 'It is better to be hated for what you are than to be loved for what you are not.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Ralph Waldo Emerson',
                    'quote' => 'Our strength grows out of our weakness.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Brian Tracy',
                    'quote' => 'Confidence is a habit that can be developed by acting as if you already had the confidence you desire to have.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Eleanor Roosevelt',
                    'quote' => 'You gain strength, courage and confidence by every experience in which you really stop to look fear in the face. You must do the thing that you think you cannot do.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Chinese Proverb',
                    'quote' => 'If a man does only what is required of him, he is a slave. If a man does more than is required of him, he is a free man.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Albert Einstein',
                    'quote' => 'Learn from yesterday, live for today, hope for tomorrow. The important thing is to not stop questioning.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Desiderius Erasmus',
                    'quote' => 'The better part of happiness is to wish to be what you are.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Henry Ford',
                    'quote' => 'The whole secret of a successful life is to find out what is one\'s destiny to do, and then do it.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Abraham Lincoln',
                    'quote' => 'Always bear in mind that your own resolution to succeed is more important than any one thing.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Albert Einstein',
                    'quote' => 'Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Dale Carnegie',
                    'quote' => 'Are you bored with life? Then throw yourself into some work you believe in with all your heart, live for it, die for it, and you will find happiness that you had thought could never be yours.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'William James',
                    'quote' => 'The greatest discovery of my generation is that a human being can alter his life by altering his attitudes of mind.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'William Wirt',
                    'quote' => 'Seize the moment of excited curiosity on any subject to solve your doubts; for if you let it pass, the desire may never return, and you may remain in ignorance.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Buddha',
                    'quote' => 'What you are is what you have been, and what you will be is what you do now.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Buddha',
                    'quote' => 'We are what we think. All that we are arises with our thoughts. With our thoughts, we make the world.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'John Ruskin',
                    'quote' => 'The highest reward for man\'s toil is not what he gets for it, but what he becomes by it.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Josh S. Hinds',
                    'quote' => 'A day will never be anymore than what you make of it.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Basho',
                    'quote' => 'Do not seek to follow in the footsteps of the wise. Seek what they sought.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Bruce Lee',
                    'quote' => 'If you always put limits on everything you do, physical or anything else. It will spread into your work and into your life. There are no limits. There are only plateaus, and you must not stay there, you must go beyond them.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Roger H. Lincoln',
                    'quote' => 'There are two rules for success: 1) Never tell everything you know…',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'author' => 'Rumi',
                    'quote' => 'You were born with potential. You were born with goodness and trust. You were born with ideals and dreams. You were born with greatness. You were born with wings. You are not meant for crawling, so don’t. You have wings. Learn to use them and fly.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);

        } else {
            echo "Table is not empty, therefore NOT seeded";
        }
    }
}

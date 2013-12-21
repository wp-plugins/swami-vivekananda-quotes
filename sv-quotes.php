<?php
/**
 * @ * @package SVQuotes
 * @version 1.0
 */
/*
Plugin Name: Swami Vivekananda Quotes
Plugin URI: http://www.jayantisolanki.com/projects/plugins/swami-vivekananda-quotes.zip
Description: You will see a random quote from Swami Vivekananda displayed at the top of the admin screen.
Author: Jayanti Solanki
Version: 1.0
Author URI: http://www.jayantisolanki.com
*/
class SVQuotes {  
    public function __construct()  
    {
		add_action( 'admin_notices', array( $this, 'swami_vivekananda_quotes' ) );
	}
	
	function swami_vivekananda_quotes() {
		echo ( '<div class="svquote" style="margin:10px 0; font-size:15px;"><em>'.
		$this->get_a_quote().
		'</em> <strong>- Swami Vivekananda</strong></div>' );
	}
	
	function get_a_quote() {
		$quotes="I am the thread that runs through all these pearls, and each pearl is a religion or even a sect thereof. Such are the different pearls, and God is the thread that runs through all of them; most people, however, are entirely unconscious of it.
I do not want to get material life, do not want the sense-life, but something higher. That is renunciation. Then, by the power of meditation, undo the mischief that has been done.
Seek ye first the kingdom of God, and everything shall be added unto you. This is the one great duty, this is renunciation. Live for an ideal, and leave no place in the mind for anything else. Let us put forth all our energies to acquire that which never fails--our spiritual perfection. If we have true yearning for realization, we must struggle, and through struggle growth will come. We shall make mistakes, but they may be angels unawares.
Comfort is no test of truth; on the contrary, truth is often far from being comfortable.
Face the brutes. That is a lesson for all life—face the terrible, face it boldly. Like the monkeys, the hardships of life fall back when we cease to flee before them.
I do not want to get material life. I do not want sense-life but something higher. That is renunciation. Then, by the power of meditation, undo the mischief that has been done.
Seek ye first the kingdom of God, and everything else shall be added unto you. This is the one great duty, this is renunciation. Live for an ideal, and leave no place in the mind for anything else.
The earth is enjoyed by heroes—this is the unfailing truth. Be a hero. Always say, I have no fear.
A few heart-whole, sincere, and energetic men and women can do more in a year than a mob in a century.
A tremendous stream is flowing toward the ocean, carrying us all along with it; and though like straws and scraps of paper we may at times float aimlessly about, in the long run we are sure to join the Ocean of Life and Bliss.
Above all, beware of compromises. Hold on to your own principles in weal or woe and never adjust them to others’ fads through the greed of getting supporters. Your Atman is the support of the universe—whose support do you stand in need of?
Above all, beware of compromises. I do not mean that you are to get into antagonism with anybody, but you have to hold on to your own principles in weal or woe and never adjust them to others fads thought the greed of getting supporters.
After every happiness comes misery; they may be far apart or near. The more advanced the soul, the more quickly does one follow the other. What we want is neither happiness nor misery. Both make us forget our true nature; both are chains--one iron, one gold; behind both is the Atman, who knows neither happiness nor misery. These are states, and states must ever change; but the nature of the Atman is bliss, peace, unchanging. We have not to get it, we have it; only wash away the dross and see it.
All is the Self or Brahman. The saint, the sinner, the lamb, the tiger, even the murderer, as far as they have any reality, can be nothing else, because there is nothing else.
All knowledge that the world has ever received comes from the mind; the infinite library of the universe is in our own mind.
All power is within you. You can do anything and everything. Believe in that. Do not believe that you are weak; do not believe that you are half-crazy lunatics, as most of us do nowadays. Stand up and express the divinity within you.
All that is real in me is God; all that is real in God is I. The gulf between God and human beings is thus bridged. Thus we find how, by knowing God, we find the kingdom of heaven within us.
All that is real in me is God; all that is real in God is I. The gulf between God and me is thus bridged. Thus by knowing God, we find that the kingdom of heaven is within us.
All truth is eternal. Truth is nobody’s property; no race, no individual can lay any exclusive claim to it. Truth is the nature of all souls.
All who have actually attained any real religious experience never wrangle over the form in which the different religions are expressed. They know that the soul of all religions is the same and so they have no quarrel with anybody just because he or she does not speak in the same tongue.
Always discriminate--your body, your house, the people and the world are all absolutely unreal like a dream. Always think that the body is only an inert instrument. And the Atman within is your real nature.
Always discriminate—your body, your house, the people around, and the world are all unreal like a dream. Always think that this body is only an inert instrument. And the Atman within is your real nature.
Anything that brings spiritual, mental, or physical weakness, touch it not with the toes of your feet.
Anything that is secret and mysterious in these systems of yoga should be at once rejected. The best guide in life is strength. In religion, as in all other matters, discard everything that weakens you, have nothing to do with it.
Are great things ever done smoothly? Time, patience, and indomitable will must show.
Are you unselfish? That is the question. If you are, you will be perfect without reading a single religious book, without going into a single church or temple.
As body, mind, or soul, you are a dream; you really are Being, Consciousness, Bliss (satchidananda). You are the God of this universe.
As long as we believe ourselves to be even the least different from God, fear remains with us; but when we know ourselves to be the One, fear goes; of what can we be afraid?
As soon as I think that I am a little body, I want to preserve it, to protect it, to keep it nice, at the expense of other bodies; then you and I become separate.
As soon as you know the voice and understand what it is, the whole scene changes. The same world which was the ghastly battlefield of maya is now changed into something good and beautiful.
Astrology and all these mystical things are generally signs of a weak mind; therefore as soon as they are becoming prominent in our minds, we should see a physician, take good food, and rest.
Avoid excessive merriment. A mind in that state never becomes calm; it becomes fickle. Excessive merriment will always be followed by sorrow. Tears and laughter are near kin. People so often run from one extreme to the other.
Be a hero. Always say, I have no fear. Tell this to everyone—Have no fear.
Be brave! Be strong! Be fearless! Once you have taken up the spiritual life, fight as long as there is any life in you. Even though you know you are going to be killed, fight till you are killed. Don’t die of fright. Die fighting. Don’t go down till you are knocked down.
Be not afraid, for all great power throughout the history of humanity has been with the people. From out of their ranks have come all the greatest geniuses of the world, and history can only repeat itself. Be not afraid of anything. You will do marvelous work.
Be perfectly resigned, perfectly unconcerned; then alone can you do any true work. No eyes can see the real forces; we can only see the results. Put out self, forget it; just let God work, it is His business.
Be strong! … You talk of ghosts and devils. We are the living devils. The sign of life is strength and growth. The sign of death is weakness. Whatever is weak, avoid! It is death. If it is strength, go down into hell and get hold of it! There is salvation only for the brave. None but the brave deserves the fair. None but the bravest deserves salvation.
Be strong! Don’t talk of ghosts and devils. We are the living devils. The sign of life is strength and growth. The sign of death is weakness. Whatever is weak, avoid! It is death. If it is strength, go down into hell and get hold of it! There is salvation only for the brave.
Bless people when the revile you. Think how much good they are doing by helping to stamp out the false ego. Hold fast to the Atman, think only pure thoughts, and you will accomplish more than a regiment of mere preachers.
Bless people when they revile you. Think how much good they are doing by helping to stamp out the false ego. Hold fast to the real Self. Think only pure thoughts, and you will accomplish more than a regiment of mere preachers. Out of purity and silence comes the word of power.
Blows are what awaken us and help to break the dream. They show us the insufficiency of this world and make us long to escape, to have freedom.
Books are infinite in number and time is short. The secret of knowledge is to take what is essential. Take that and try to live up to it.
Both the forces of good and evil will keep the universe alive for us, until we awake from our dreams and give up this building of mud pies.
Brave, bold men and women, these are what we want. What we want is vigor in the blood, strength in the nerves, iron muscles and nerves of steel, not softening namby-pamby ideas. Avoid all these. Avoid all mystery. There is no mystery in religion.
Brave, bold people, these are what we want. What we want is vigor in the blood, strength in the nerves, iron muscles and nerves of steel, not softening namby-pamby ideas. Avoid all these. Avoid all mystery. There is no mystery in religion.
By doing well the duty which is nearest to us, the duty which is in our hands now, we make ourselves stronger; and improving our strength in this manner step by step, we may reach a state in which it shall be our privilege to do the most coveted and honored duties in life and in society.
By the Vedas no books are meant. They mean the accumulated treasury of spiritual laws discovered by different persons in different times. Just as the law of gravitation existed before its discovery, and would exist if all humanity forgot it, so is it with the laws that govern the spiritual world
Change is always subjective. All through evolution you find that the conquest of nature comes by change in the subject. Apply this to religion and morality, and you will find that the conquest of evil comes by the change in the subjective alone. That is how the Advaitic system gets its whole force, on the subjective side of man.
Change is always subjective. To talk of evil and misery is nonsense, because they do not exist outside. If I am immune from all anger, I never feel angry. If am immune from all hatred, I never feel hatred.
Come out into the broad light of day, come out from the little narrow paths, for how can the infinite soul rest content to live and die in small ruts?
Come out into the universe of Light. Everything in the universe is yours, stretch out your arms and embrace it with love. If you every felt you wanted to do that, you have felt God.
Delusion will vanish as the light becomes more and more effulgent, load after load of ignorance will vanish, and then will come a time when all else has disappeared and the sun alone shines.
Desire, ignorance, and inequality—this is the trinity of bondage.
Desire, want, is the father of all misery. Desires are bound by the laws of success and failure. Desires must bring misery. The great secret of true success, of true happiness, is this: the person who asks for no return, the perfectly unselfish person, is the most successful.
Despondency is not religion, whatever else it may be.
Discriminate within yourself between the real and the unreal. Have you not read the Vedanta? Even when you sleep, keep the sword of discrimination at the head of your bed, so that covetousness cannot approach you even in dream. Practicing such strength, renunciation will gradually come, and then you will see the portals of heaven are wide open to you.
Do any deserve liberty who are not ready to give it to others? Let us calmly go to work, instead of dissipating our energy in unnecessary fretting and fuming.
Do not go for glass beads leaving the mine of diamonds. This life is a great chance. What, seekest thou the pleasures of the world? He is the fountain of all bliss. See for the highest, aim at that highest, and you shall reach the highest.
Do not hate anybody, because that hatred which comes out from you must, in the long run, come back to you. If you love, that love will come back to you, completing the circle.
Do not look back upon what has been done. Go ahead!
Do you think these sannyasi children of Sri Ramakrishna are born to simply to sit under trees lighting dhuni-fires? Whenever any of them will take up some work, people will be astonished to see their energy. Learn from them how to work.
Dont look back—forward, infinite energy, infinite enthusiasm, infinite daring, and infinite patience—then alone can great deeds be accomplished.
Each work has to pass through these stages—ridicule, opposition, and then acceptance. Those who think ahead of their time are sure to be misunderstood.
Even the greatest fool can accomplish a task if it were after his or her heart. But the intelligent ones are those who can convert every work into one that suits their taste.
Every action that helps us manifest our divine nature more and more is good; every action that retards it is evil.
Every individual is a center for the manifestation of a certain force. This force has been stored up as the resultant of our previous works, and each one of us is born with this force at our back.
Every step I take in light is mine forever.
Everything must be sacrificed, if necessary, for that one sentiment: universality.
Experience is the only teacher we have. We may talk and reason all our lives, but we shall not understand a word of truth until we experience it ourselves.
Fear is death, fear is sin, fear is hell, fear is unrighteousness, fear is wrong life. All the negative thoughts and ideas that are in the world have proceeded from this evil spirit of fear.
Fear is death, fear is sin, fear is hell, fear is unrighteousness. All the negative thoughts and ideas that are in this world have proceeded from this evil spirit of fear.
Fill the brain with high thoughts, highest ideals, place them day and night before you, and out of that will come great work.
First get rid of the delusion I am the body, then only will we want real knowledge.
First, believe in the world—that there is meaning behind everything.
Freedom can never be reached by the weak. Throw away all weakness. Tell your body that it is strong, tell your mind that it is strong, and have unbounded faith and hope in yourself.
Give up all desire for enjoyment in earth or heaven. Control the organs of the senses and control the mind. Bear every misery without even knowing that you are miserable. Think of nothing but spiritual freedom.
Go on saying, I am free. Never mind if the next moment delusion comes and says, I am bound. Dehypnotize the whole thing.
God is merciful to those whom He sees struggling heart and soul for realization. But remain idle, without any struggle, and you will see that His grace will never come.
God is not to be reached by the weak. Never be weak. You have infinite strength within you. How else will you conquer anything? How else will you come to God?
God is not to be reached by the weak. Never be weak. You have infinite strength within you. How else will you conquer anything? How else will you come to God?
God is self-evident, impersonal, omniscient, the Knower and the Master of nature, the Lord of all. He is behind all worship and it is being done according to Him, whether we know it or not.
God is very merciful to those whom He sees struggling heart and soul for spiritual realization. But remain idle, without any struggle, and you will see that His grace will never come.
Great work requires great and persistent effort for a long time. … Character has to be established through a thousand stumbles.
Have faith in Guru, in his teachings, and in the surety that you can get free. Think day and night that this universe is zero, only God is. Have intense desire to get free.
Have you got the will to surmount mountain-high obstructions? If the whole world stands against you sword in hand, would you still dare to do what you think is right?
He whom the sages have been seeking in all these places is in our own hearts; the voice that you heard was right, says Vedanta, but the direction you gave to the voice was wrong.
Him I call a Mahatma (great soul) whose heart bleeds for the poor, otherwise he is a Duratma (wicked soul). Let us unite our wills in continued prayer for their good.
Hold to the idea, I am not the mind, I see that I am thinking, I am watching my mind act, and each day the identification of yourself with thoughts and feelings will grow less, until at last you can entirely separate yourself from the mind and actually know it to be apart from yourself.
However we may receive blows, and however knocked about we may be, the Soul is there and is never injured. We are that Infinite.
I am no metaphysician, no philosopher, nay, no saint. But I am poor and I love the poor. I see what they call the poor of this country and how many there are who feel for them!
I fervently wish no misery ever came near anyone; yet it is that alone that gives us an insight into the depths of our lives, does it not? In our moments of anguish, gates barred forever seem to open and let in many a flood of light.
I hate this world, this dream, this horrible nightmare, with its churches and chicaneries, its books and blackguardisms, its fair faces and false hearts, its howling righteousness on the surface and utter hollowness beneath and, above all, its sanctified shopkeeping!
I hate this world, this dream, this horrible nightmare, with its churches and chicaneries, its books and blackguardisms, its fair faces and false hearts, its howling righteousness on the surface and utter hollowness beneath, and, above all, its sanctified shopkeeping.
I have been asked many times, Why do you laugh so much and make so many jokes? I become serious sometimes--when I have a stomachache! The Lord is all blissfulness. He is the reality behind all that exists. He is the goodness, the truth in everything. You are His incarnations. That is what is glorious. The nearer you are to Him, the less you will have occasions to cry or weep. The further we are from Him, the more will long faces come. The more we know of Him, the more misery vanishes.
I, for one, thoroughly believe that no power in the universe can withhold from anyone anything they really deserve.
If a person who lives in God becomes miserable, what is the use of living in God? What is the use of such a God? Throw such a God overboard into the Pacific Ocean. We do not want such a God!
If a piece of burning charcoal be placed on a man’s head, see how he struggles to throw it off. Similar will be the struggle for freedom of those who really understand that they are slaves of nature.
If one who lives in the Lord becomes miserable, what is the use of living in Him? What is the use of such a God? Throw Him overboard into the Pacific Ocean. We do not want Him.
If superstition enters, the brain is gone.
If the mind is intensely eager, everything can be accomplished—mountains can be crumbled into atoms.
If there is no strength in body and mind, the Atman cannot be realized. First you have to build the body by good nutritious food—then only will the mind be strong.
If there is one word that you find coming out like a bomb from the Upanishads, bursting like a bombshell upon masses of ignorance, it is the word fearlessness.
If you really want the good of others, the whole universe may stand against you and cannot hurt you. It must crumble before your power of the Lord Himself in you if you are sincere and really unselfish.
If you think that you are bound, you remain bound; you make your own bondage. If you know that you are free, you are free this moment. This is knowledge, knowledge of freedom. Freedom is the goal of all nature.
If you want to be a yogi, you must be free, and place yourself in circumstances where you are alone and free from all anxiety. One who desires a comfortable and nice life and at the same time wants to realize the Self is like the fool who, wanting to cross the river, caught hold of a crocodile, mistaking it for a log of wood.
If you want to be a Yogi, you must be free, and place yourself in circumstances where you are alone and free from all anxiety. One who desires a comfortable and nice life and, at the same time, wants to realize the Atman is like the fool who, wanting to cross the river, caught hold of a crocodile mistaking it for a log of wood.
If you want to have life, you have to die every moment for it. Life and death are only different expressions of the same thing looked at from different standpoints; they are the falling and the rising of the same wave, and the two form one whole.
Impurity is a mere superimposition under which your real nature has become hidden. But the real you is already perfect, already strong.
In Buddha we had the great, universal heart and infinite patience, making religion practical and bringing it to everyone’s door. In Shankaracharya we saw tremendous intellectual power, throwing the scorching light of reason upon everything. We want today that bright sun of intellectuality joined with the heart of Buddha, the wonderful infinite heart of love and mercy. This union will give us the highest philosophy. Science and religion will meet and shake hands. Poetry and philosophy will become friends.What! Those giants of old, the ancient Rishis, who never walked but strode, of whom if you were to think but for a moment you would shrivel up into a moth, they sir, had time--and you have no time!
In real meditation you forget the body. You may be cut to pieces and not feel it at all. You feel such pleasure in it. You become so light. This perfect rest we will get in meditation.
In the world take always the position of the giver. Give everything and look for no return. Give love, give help, give service, give any little thing you can, but keep out barter. Make no conditions and none will be imposed. Let us give out of our own bounty, just as God gives to us.
In the world take always the position of the giver. Give everything and look for no return. Give love, give help, give service, give any little thing you can, but keep out barter. Make no conditions and none will be imposed on you. Let us give out of our own bounty, just as God gives to us.
In this external world, which is full of finite things, it is impossible to see and find the Infinite. The Infinite must be sought in that alone which is infinite, and the only thing infinite about us is that which is within us, our own soul. Neither the body, nor the mind, nor even our thoughts, nor the world we see around us, is infinite.
Is there any sex-distinction in the Atman (Self)? Out with the differentiation between man and woman—all is Atman! Give up the identification with the body, and stand up!
It is always for greater joy that you give up the lesser. This is practical religion—the attainment of freedom, renunciation. Renounce the lower so that you may get the higher. Renounce! Renounce! Sacrifice! Give up! Not for zero. Not for nothing, but to get the higher.
It is always for greater joy that you give up the lesser. This is practical religion--the attainment of freedom, renunciation. Renounce the lower so that you may get the higher. Renounce! Renounce! Sacrifice! Give up! Not for zero. Not for nothing. But to get the higher.
It is feeling that is the life, the strength, the vitality, without which no amount of intellectual activity can reach God.
It is only by doing good to others that one attains to ones own good.
It is only work that is done as a free-will offering to humanity and to nature that does not bring with it any binding attachment.
It is only work that is done as freewill offering to humanity and to nature that does not bring with it any binding attachment.
It is the cheerful mind that is persevering. It is the strong mind that hews its way through a thousand difficulties.
It is the patient building of character, the intense struggle to realize the truth, which alone will tell in the future of humanity.
Jnana teaches that the world should be given up, but not on that account to be abandoned. To be in the world but not of it—is the true test of the sannyasin.
Karma is the eternal assertion of human freedom. If we can bring ourselves down by our karma, surely it is in our power to raise ourselves by our own karma.
Knowledge can only be got in one way, the way of experience; there is no other way to know.
Learn to feel yourself in other bodies, to know that we are all one. Throw all other nonsense to the winds. Spit out your actions, good or bad, and never think of them again. What is done is done. Throw off superstition. Have no weakness even in the face of death. Be free.
Learn to feel yourself in other bodies, to know that we are all one. Throw all other nonsense to the winds. Spit out your actions, good or bad, and never think of them again. What is done is done. Throw off superstition. Have no weakness even in the face of death. Do not repent, do not brood over past deeds. Be âzâd (free).
Learning and wisdom are superfluities, the surface glitter merely, but it is the heart that is the seat of all power.
Learning and wisdom are superfluities, the surface glitter merely, but it is the heart that is the seat of all power. It is not in the brain but in the heart that the Atman, possessed of knowledge, power, and activity, has its seat.
Let each one of us pray day and night for the downtrodden millions who are held fast by poverty, priestcraft, and tyranny. Pray day and night for them. I care more to preach religion to them than to the high and the rich.
Let each one of us pray day and night for the downtrodden millions, who are held fast by poverty, priestcraft, and tyranny. Pray day and night for them. I care more to preach religion to them than to the high and the rich. I am no metaphysician, no philosopher, nay, no saint. But I am poor and I love the poor.
Let the mind be cheerful but calm. Never let it run into excesses, because every excess will be followed by a reaction.
Let the mind be cheerful but calm. Never let it run into excesses, because every excess will be followed by a reaction.
Let us make our hearts as big as an ocean, to go beyond all the trifles of the world and see it only as a picture. We can then enjoy the world without being in any way affected by it.
Let us not depend upon the world for pleasure.
Let us put forth all our energies to acquire that which never fails—our spiritual perfection. If we have true yearning for realization, we must struggle, and through struggle growth will come. We shall make mistakes, but they may be angels unawares.
Let us worship the spirit in spirit, standing on spirit. Let the foundation be spirit, the middle spirit, the culmination spirit.
Live for an ideal, and that one ideal alone. Let it be so great, so strong, that there may be nothing else left in the mind; no place for anything else, no time for anything else.
Live for an ideal, and that one ideal alone. Let it be so great, so strong, that there may be nothing else left in the mind; no place for anything else, no time for anything else.
Look here--we shall die! Bear this in mind always, and then the spirit within will wake up. Only then will meanness vanish from you, practicality in work will come, you will get new vigor in mind and body, and those who come in contact with you will also feel that they have really got something uplifting from you.
Look here—we shall die! Bear this in mind always, and then the spirit within will wake up. Then meanness will vanish from you, practicality in work will come, you will get new vigor in mind and body, and those who come in contact with you will also feel that they have really got something uplifting from you.
Look upon every man, woman, and everyone as God. You cannot help anyone, you can only serve: serve the children of the Lord, serve the Lord Himself, if you have the privilege.
Love is always mutual and reflective. You may hate me, and if I want to love you, you repulse me. But if I persist, in a month or a year you are bound to love me. It is a well-known psychological phenomenon.
Many of us get many messages in our lives, or think we get them. As long as the message is regarding our own selves, go on doing what you please. But when it is in regard to our contact with and behavior to others, think a hundred times before you act upon it—and then you will be safe.
May I be born again and again, and suffer thousands of miseries so that I may worship the only God that exists, the only God I believe in, the sum total of all souls--and, above all, my God the wicked, my God the miserable, my God the poor of all races, of all species, is the special object of my worship.
Meditation means the mind is turned back upon itself. The mind stops all the thought-waves and the world stops. Your consciousness expands. Every time you meditate you will keep your growth.
Meditation means the mind is turned back upon itself. The mind stops all the thought-waves and the world stops. Your consciousness expands. Every time you meditate, you will keep your growth.
Mind you, this is lifes experience: if you really want the good of others, the whole universe may stand against you and cannot hurt you. It must crumble before your power of the Lord Himself in you if you are sincere and really unselfish.
My child, what I want is muscles of iron and nerves of steel, inside which dwells a mind of the same material as that of which the thunderbolt is made.
My name should not be made prominent. It is my ideas that I want to see realized. The disciples of all the prophets have always inextricably mixed up the ideas of the Master with person, and at last killed the ideas for the person. The disciples of Sri Ramakrishna must guard against doing the same thing. Work for the idea, not the person.
Nature grinds all of us. Keep count of the ounce of pleasure you get. In the long run, nature did her work through you, and when you die your body will make other plants grow. Yet we think all the time that we are getting pleasure ourselves. Thus the wheel goes round.
Nature, body, mind go to death, not we. We neither go nor come. The man Vivekananda is in nature, is born and dies; but the Self we see as Vivekananda is never born and never dies. It is the eternal and unchangeable Reality.
Neither seek nor avoid; take what comes. It is liberty to be affected by nothing. Do not merely endure; be unattached.
No authority can save us, no beliefs. If there is a God, all can find Him. No one needs to be told it is warm; all can discover it for themselves. So it should be with God. He should be a fact in the consciousness of every person.
No one should be judged by their defects. The great virtues a person has are his or her especially. But their errors are the common weakness of humanity and should never be counted in estimating a person’s character.
No one should be judged by their defects. The virtues a person has are his especially; his errors are the common weaknesses of humanity and should never be counted in estimating his character.
Not even the deepest sleep will give you such a rest as meditation can. The mind goes on jumping even in deepest sleep. Just those few moments in meditation your brain has almost stopped. … You forget the body. … You feel such pleasure in it. You become so light. This perfect rest we will get in meditation.
Oh, to live even for a day in the full light of freedom, to breathe the free air of simplicity! Isn’t that the highest purity?
Oh, to live even for a day in the full light of freedom, to breathe the free air of simplicity! Isn’t that the highest purity?
One who leans on others cannot serve the God of Truth.
Our first duty is not to hate ourselves, because to advance we must have faith in ourselves first and then in God. Those who have no faith in themselves can never have faith in God.
Our supreme duty is to advance toward freedom—physical, mental, and spiritual—and help others to do so.
Out of purity and silence comes the word of power.
Perfection does not come from belief or faith. Talk does not count for anything. Parrots can do that. Perfection comes through selfless work.
Perfection is always infinite. We are the Infinite already.You and I, and all beings, are trying to manifest that infinity.
Please everyone without becoming a hypocrite or a coward.
Pray all the time, read all the scriptures in the world, and worship all the gods there are ...but unless you realize the Truth, there is no freedom.
Pray all the time, read all the scriptures in the world, and worship all the gods there are …[but] unless you realize the Self (atman), there is no freedom.
Purity, patience, and perseverance are the three essentials to success and, above all, love.
Put God behind everything—human beings, animals, food, and work. Make this a habit.
Put God behind everything—people, animals, food, work. Make this a habit.
Realize your true nature. That is all there is to do. Know yourself as you are—infinite spirit. That is practical religion. Everything else is impractical, for everything else will perish.
Realize yourself. That is all there is to do. Know yourself as you are—infinite spirit. That is practical religion. Everything else is impractical, for everything else will vanish.
Religion as a science, as a study, is the greatest and healthiest exercise that the human mind can have.
Religion has no business to formulate social laws and insist on the difference between beings, because its aim and end is to obliterate all such fictions and monstrosities.
Renounce and give up. What did Christ say? He that loseth his life for my sake shall find it. Again and again did he preach renunciation as the only way to perfection. There comes a time when the mind awakes from this long and dreary dream—the child gives up its play and wants to go back to its mother.
Renunciation is the background of all religious thought wherever it be, and you will always find that as this idea of renunciation lessens, the more will the senses creep into the field of religion, and spirituality will decrease in the same ratio.
Renunciation is the very basis of our true life. Every moment of goodness and real life that we enjoy is when we do not think of ourselves.
Say Soham, Soham whatever comes. Tell yourself this even in eating, walking, suffering. Tell the mind this incessantly—that what we see never existed, that there is only I. Flash--the dream will break! Think day and night, this universe is zero, only God is. Have intense desire to get free.
Self-realization is to be attained by renunciation, by meditation—renunciation of all the senses, cutting the knots, the chains that bind us down to matter.
So long as millions live in hunger and ignorance, I hold every person a traitor who, having been educated at their expense, pays not the least heed to them.
So long as the millions live in hunger and ignorance, I hold every person a traitor who, having been educated at their expense, pays not the least heed to them!
So long as there is desire or want, it is a sure sign that there is imperfection. A perfect, free being cannot have any desire.
Soft-brained people, weak-minded, chicken-hearted, cannot find the truth. One has to be free, and as broad as the sky.
Some people are so afraid of losing their individuality. Wouldn’t it be better for the pig to lose his pig-individuality if he can become God? Yes. But the poor pig does not think so at the time. Which state is my individuality? When I was a baby sprawling on the floor trying to swallow my thumb? Was that the individuality I should be sorry to lose? Fifty years hence I shall look upon this present state and laugh, just as I now look upon the baby state. Which of these individualities shall I keep?
Stand as a rock; you are indestructible. You are the Self (atman), the God of the universe.
Stand as a rock; you are indestructible. You are the Self, the God of the universe.
Stand up, be bold, and take the blame on your own shoulders. Do not go about throwing mud at others; for all the faults you suffer from, you are the sole and only cause.
Stand up, be bold, and take the blame on your own shoulders. Do not go about throwing mud at others; for all the faults you suffer from, you are the sole and only cause.
Stand up, be bold, be strong. Take the whole responsibility on your own shoulders, and know that you are the creator of your own destiny. All the strength and succor you want is within yourselves. Therefore, make your own future.
Stand upon the Atman, then only can we truly love the world. Take a very, very high stand; knowing our universal nature, we must look with perfect calmness upon all the panorama of the world.
Stand upon the Self, only then can we truly love the world. Take a very high stand; knowing our universal nature, we must look with perfect calmness upon all the panorama of the world.
Stick to God! Who cares what comes to the body or to anything else! Through the terrors of evil, say—my God, my love! Through the pangs of death, say—my God, my love! Through all the evils under the sun, say my God, my love!
Stick to God! Who cares what comes to the body or to anything else! Through the terrors of evil, say--my God, my love! Through the pangs of death, say--my God, my love! Through all the evils under the sun, say--my God, my love! Thou art here, I see Thee. Thou art with me, I feel Thee. I am Thine, take me. I am not of the world’s but Thine, leave not then me.
Strength is life, weakness is death. Strength is felicity, life eternal, immortal. Weakness is constant strain and misery; weakness is death.
Strength is the sign of vigor, the sign of life, the sign of hope, the sign of health, and the sign of everything that is good. As long as the body lives, there must be strength in the body, strength in the mind, strength in the hand.
Superstition is our great enemy, but bigotry is worse.
Take up one idea. Make that one idea your life—think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success, and this is the way great spiritual giants are produced. Others are mere talking machines.
Take up one idea. Make that one idea your life--think of it, dream of it, live on that idea. Let the brain, muscles, nerves, every part of your body, be full of that idea, and just leave every other idea alone. This is the way to success, and this is the way great spiritual giants are produced. Others are mere talking machines.
Tell the truth boldly, whether it hurts or not. Never pander to weakness. If truth is too much for intelligent people and sweeps them away, let them go; the sooner the better.
Thank God for giving you this world as a moral gymnasium to help your development, but never imagine you can help the world.
That which is nearest is least observed. The Atman is the nearest of the near, therefore a careless and unsteady mind gets no clue to the Atman. But one who is alert, calm, self-restrained, and discriminating, ignores the external world and, diving more and more into the inner world, realizes the glory of the Atman and becomes great.
That which is nearest is least observed. The Atman is the nearest of the near, therefore the careless and the unsteady mind gets no clue to it. But the person who is alert, calm, self-restrained, and discriminating ignores the external world and, diving more and more into the inner world, realizes the glory of the Atman and becomes great.
The animal has its happiness in the senses, the human beings in their intellect, and the gods in spiritual contemplation. It is only to the soul that has attained to this contemplative state that the world really becomes beautiful.
The Atman alone is eternal. Hospitals will tumble down. Railroad givers will all die. This earth will be blown to pieces, suns wiped out. The Atman endures for ever.
The book one must read to learn natural sciences is the book of nature. The book from which to learn religion is your own mind and heart.
The correct meaning of the statement The Vedas are beginningless and eternal is that the law or truth revealed by them is permanent and changeless.
The correct meaning of the statement The Vedas are beginningless and eternal is that the law or truth revealed by them is permanent and changeless.
The disciple must have great power of endurance. Bear all evil and misery without one thought of unhappiness, resistance, remedy, or retaliation. That is true endurance, and that you must acquire.
The disciple must have great power of endurance. Life seems comfortable; and you find the mind behaves well when everything is going well with you. But if something goes wrong, your mind loses its balance. That is not good. Bear all evil and misery without one murmur of hurt, without one thought of unhappiness, resistance, remedy, or retaliation. That is true endurance; and that you must acquire.
The essence of Vedanta is that there is but one Being and that every soul is that Being in full, not a part of that Being.
The essential thing in religion is making the heart pure; the Kingdom of Heaven is within us, but only the pure in heart can see the King. While we think of the world, it is only the world for us; but let us come to it with the feeling that the world is God, and we shall have God.
The first sign that you are becoming religious is that you are becoming cheerful.
The great secret of true success, of true happiness, is this: the man or woman who asks for no return, the perfectly unselfish person, is the most successful.
The greatest help to spiritual life is meditation. In meditation we divest ourselves of all material conditions and feel our divine nature. We do not depend upon any external help in meditation.
The greatest help to spiritual life is meditation. In meditation we divest ourselves of all material conditions and feel our divine nature. We do not depend upon any external help in meditation. The touch of the soul can paint the brightest color even in the dingiest places; it can cast a fragrance over the vilest thing; it can make the wicked divine--and all enmity, all selfishness is effaced.
The greatest religion is to be true to your own nature. Have faith in yourselves! If you do not exist, how can God exist, or anybody else?
The greatest religion is to be true to your own nature. Have faith in yourselves! If you do not exist, how can God or anybody else exist?
The greatest sin is to think that you are weak. No one is greater: realize that you are Brahman. Nothing has power except what you give it.
The highest manifestation of strength is to keep ourselves calm and on our own feet.
The highest manifestation of strength is to keep ourselves calm and on our own feet.
The human soul has sojourned in lower and higher forms, migrating from one to another according to the samskaras or impressions, but it is only in the highest form as a human being that it attains to freedom.
The idea of perfect womanhood is perfect independence.
The important thing is how much less you think of the body, of yourself as matter—as dead, dull, insentient matter; how much more you think of yourself as shining immortal being. The more you think of yourself as spirit, the more eager you will be to be absolutely free from matter, body and senses. This is the intense desire to be free.
The important thing is: how much less you think of the body, of yourself as matter—as dead, dull, insentient matter; how much more you think of yourself as shining immortal being.
The important thing is: how much less you think of the body, of yourself as matter--as dead, dull, insentient matter; how much more you think of yourself as shining immortal being. The more you think of yourself as shining immortal spirit, the more eager you will be to be absolutely free of matter, body and senses. This is the intense desire to be free.
The Kingdom of Heaven is within us. God is within us. He is the Soul of our souls. See Him in your own soul. That is practical religion. That is freedom.
The Kingdom of Heaven is within us. He is there. He is the soul of our souls. See Him in your own soul. That is practical religion. That is freedom
The less passion there is, the better we work. The calmer we are, the better for us and the more the amount of work we can do. When we let loose our feelings, we waste so much energy, shatter our nerves, disturb our minds, and accomplish very little work.
The less the thought of the body, the better it is for us. For it is the body that drags us down. It is attachment, identification, which makes us miserable.
The less the thought of the body, the better it is. For it is the body that drags us down. It is attachment, identification which makes us miserable. That is the secret: to think that I am the spirit and not the body, and that the whole of this universe with all its relations, with all its good and all its evil, is but as a series of paintings--scenes on a canvas--of which I am the witness.
The meditative state is the highest state of existence. So long as there is desire, no real happiness can come. It is only the contemplative, witness-like study of objects that brings to us real enjoyment and happiness.
The mind is but the subtle part of the body. You must retain great strength in your mind and words.
The mistake is that we cling to the body when it is the spirit that is really immortal.
The mistake is that we cling to the body when it is the spirit that is really immortal.
The moment you fear, you are nobody. It is fear that is the great cause of misery in the world. It is fear that is the greatest of all superstitions. It is the fear that is the cause of our woes, and it is fearlessness that brings heaven in a moment.
The moment you fear, you are nobody. It is fear that is the greatest cause of misery in the world. It is fear that is the greatest of all superstitions. It is fear that is the cause of our woes, and it is fearlessness that brings heaven in a moment.
The more we grow in love and virtue and holiness, the more we see love and virtue and holiness outside. All condemnation of others really condemns ourselves. Adjust the microcosm (which is in your power to do) and the macrocosm will adjust itself for you.
The more we grow in love and virtue and holiness, the more we see love and virtue and holiness outside. All condemnation of others really condemns ourselves. Adjust the microcosm (which is in your power to do) and the macrocosm will adjust itself for you. It is like the hydrostatic paradox, one drop of water can balance the universe.
The more you think of yourself as shining immortal spirit, the more eager you will be to be absolutely free of matter, body, and senses. This is the intense desire to be free.
The nature of the brute is to remain where he is, of a human being to seek good and to avoid evil, and of God to neither seek nor avoid but just to be eternally blissful. Let us be Gods, let us make our hearts like an ocean, to go beyond all the trifles of the world and see it only as a picture. We can then enjoy it without being in any way affected by it.
The nature of the brutes is to remain where they are, of human beings to seek good and avoid evil, and of God to neither seek nor avoid but just to be blissful eternally. Let us be like God.
The nearer we are to God, the less we will have occasions to cry or weep. The further we are from God, the more will long faces come. The more we know God, the more misery vanishes.
The one eternal religion is applied to the opinions of various minds and various races. There never was my religion or yours, my national religion or your national religion; there never existed many religions, there is only the one. One infinite religion existed all through eternity and will ever exist, and this religion is expressing itself in various countries in various ways.
The past was great no doubt, but I sincerely believe that the future will be more glorious still.
The power is with the silent ones, who only live and love and then withdraw their personality. They never say me and mine; they are only blessed in being instruments.
The power of purity—it is a definite power.
The powers of the mind should be concentrated and the mind turned back upon itself; as the darkest places reveal their secrets before the penetrating rays of the sun, so will the concentrated mind penetrate its own innermost secrets.
The sages are often ignorant of physical science, because they read the wrong book—the book within; and the scientists are too often ignorant of religion, because they too read the wrong book—the book outside.
The secret of life is not enjoyment but education through experience.
The Self when it appears behind the universe is called God. The same Self when it appears behind this little universe—the body—is the soul.
The Soul is not composed of any materials. It is unity indivisible. Therefore it must be indestructible.
The varieties of religious belief are an advantage, since all faiths are good, so far as they encourage us to lead a religious life. The more sects there are, the more opportunities there are for making a successful appeal to the divine instinct in all of us.
The weak have no place here, in this life or any other life. Weakness leads to slavery. Weakness leads to all kinds of misery, physical and mental. Weakness is death.
The weak have no place here, in this life or in any other life. Weakness leads to slavery. Weakness leads to all kinds of misery, physical and mental. Weakness is death.
The weak, the fearful, the ignorant will never reach the Atman. You cannot undo what you have done; the effect must come. Face it, but be careful never to do the same thing again. Give up the burden of all deeds to God. Give all, both good and bad. God helps those who do not help themselves.
The weak, the fearful, the ignorant will never reach the Atman. You cannot undo, the effect must come, face it, but be careful never to do the same thing again. Give up the burden of all deeds to the Lord. Give all, both good and bad. Do not keep the good and give only the bad. God helps those who do not help themselves.
The whole secret of existence is to have no fear. Never fear what will become of you, depend on no one. Only the moment you reject all help are you free.
The whole universe is one in the Atman. That Atman when it appears behind the universe is called God. The same Atman when it appears behind this little universe, the body, is the soul. This very soul, therefore, is the Atman in us.
The whole universe is one. There is only one Self in the universe, only One Existence, and that One Existence, when it passes through the forms of time, space, causation, is called by different names, buddhi, fine matter, gross matter, all mental and physical forms. Everything in the universe is that One, appearing in various forms. When a little part of it comes, as it were, into this network of time, space and causation, it takes forms. Take off the network, and it is all one.
The whole universe is one. There is only one Self in the universe, only One Existence.
The will is stronger than anything else. Everything must go down before the will, for it comes from God. A pure and strong will is omnipotent.
The wind of divine grace is always blowing. You just need to spread your sail. Whenever you do anything, do it with your whole heart concentrated on it. Think day and night, I am of the essence of that Supreme Being-Consciousness-Bliss. What fear and anxiety have I?
The wind of divine grace is blowing on for ever and ever. Do you spread your sail. Whenever you do anything, do it with your whole heart concentrated on it.
The world is ready to give up its secrets if we only know how to knock, how to give it the necessary blow. The strength and force of the blow come through concentration.
There are hundreds of thousands of microbes surrounding us, but they cannot harm us unless we become weak, until the body is ready and predisposed to receive them. There may be a million microbes of misery floating about us. Never mind! They dare not approach us, they have no power to get a hold on us, until the mind is weakened. This is the great fact: strength is life. Weakness is death. Strength is felicity, life eternal, immortal. Weakness is constant strain and misery: weakness is death
There cannot be friendship without equality.
There is hope for all. None can die; none can be degraded forever. Life is but a playground, however gross the play may be. However we may receive blows, and however knocked about we may be, the Atman is there and is never injured. We are that Infinite.
There is no help for you outside of yourself; you are the creator of the universe. Like the silkworm you have built a cocoon around yourself…. Burst your own cocoon and come out aw the beautiful butterfly, as the free soul. Then alone you will see Truth.
There is one thing to be remembered: that the assertion--I am God--cannot be made with regard to the sense-world.
There is one thing to be remembered: that the assertion—I am God—cannot be made with regard to the sense-world.
There is only one sin and it is: weakness. When I was a boy, I read Milton’s Paradise Lost. The only good man I had any respect for was Satan. The only saint is that person who never weakens, faces everything, and determines die game.
There is only one sin. That is weakness.... The only saint is that soul that never weakens, faces everything, and determines to die game.
There is only one sin—and that sin is weakness. When I was a boy, I read Milton’s Paradise Lost. The only good man I had any respect for was Satan. The only saint is the soul who never weakens, faces everything, and determines to die game.
There is to be found in every religion the manifestation of the struggle toward freedom. It is the groundwork of all morality, of unselfishness, which means getting rid of the idea that human beings are the same as this little body.
They alone live whose lives are in the whole universe, and the more we concentrate our lives on limited things, the faster we go towards death. Those moments alone we live when our lives are in the universe, in others; and living this little life is death, simply death, and that is why the fear of death comes.
They alone live whose lives are in the whole universe. The more we concentrate our lives in limited things, the faster we go towards death. Those moments alone we live when our lives are in the universe, in others; and living this little life is death, simply death, and that is why the fear of death comes.
Think always, I am ever-pure, ever-knowing, and ever-free. How I can do anything evil? Can I ever be fooled like ordinary people with the insignificant charms of lust and wealth? Strengthen the mind with such thoughts. This will surely bring real good.
Think always: I am ever-pure, ever-knowing, and ever-free. How can I do anything evil? Can I ever be befooled like ordinary people with the insignificant charms of lust and wealth? Strengthen the mind with such thoughts. This will surely bring real good.
Think day and night, I am of the essence of that Supreme Existence, Knowledge, Bliss--what fear and anxiety have I? This body, mind, and intellect are all transient, and That which is beyond these is myself.
This earth is higher than all the heavens; this is the greatest school in the universe.
This I have seen in life—those who are overcautious about themselves fall into dangers at every step; those who are afraid of losing honor and respect, get only disgrace; and those who are always afraid of loss, always lose.
This is no world. It is God Himself. In delusion we call it world.
This is the first lesson to learn: be determined not to curse anything outside, not to lay the blame upon anyone outside, but stand up, lay the blame on yourself. You will find that is always true. Get hold of yourself.
This is the great lesson that we are here to learn through myriads of births and heavens and hells—that there is nothing to be asked for, desired for, beyond one’s spiritual Self (atman).
This is the secret of spiritual life: to think that I am the Atman and not the body, and that the whole of this universe with all its relations, with all its good and all its evil, is but as a series of paintings—scenes on a canvas—of which I am the witness.
This life is a hard fact; work your way through it boldly, though it may be adamantine; no matter, the soul is stronger.
This little separate self must die. Then we shall find that we are in the Real, and that Real is God, and He is our own true nature, and He is always in us and with us. Let us live in Him and stand in Him. It is the only joyful state of existence. Life on the plane of the Spirit is the only life, and let us all try to attain to this realization.
This little separate self must die. Then we shall find that we are in the Real, and that Reality is God, and He is our own true nature, and He is always in us and with us. Let us live in Him and stand in Him. It is the only joyful state of existence.
This world is nothing. It is at best only a hideous caricature, a shadow of the Real. We must go to the Real. Renunciation will take us to It. Renunciation is the very basis of our true life; every moment of goodness and real life that we enjoy is when we do not think of ourselves.
This world is nothing. It is at best only a hideous caricature, a shadow of the Reality. We must go to the Reality. Renunciation will take us to It.
Those who die, merely suffering the woes of life like cats and dogs, are they human beings? The worthy are those who, even when agitated by the sharp interaction of pleasure and pain, are discriminating and, knowing them to be of an evanescent nature, become passionately devoted to the Atman. This is all the difference between human beings and animals.
Those who grumble at the little thing that has fallen to their lot to do will grumble at everything. Always grumbling they will lead a miserable life…. But those who do their duty putting their shoulder to the wheel will see the light, and higher and higher duties will fall to their share.
Those who grumble at the little thing that has fallen to their lot to do will grumble at everything. Always grumbling, they will lead a miserable life, and everything will be a failure. But those who do their duties as they go, putting their shoulders to the wheel, will see the light, and higher duties will fall to their share.
Those who have succeeded in attaching or detaching their minds at will have succeeded in Pratyahara, which means gathering towards, checking the outgoing powers of the mind, freeing it from the thralldom of the senses. When we can do this, we shall really possess character; then alone we shall have taken a long step towards freedom. Before that, we are mere machines.
Those who work at a thing heart and soul not only achieve success in it but through their absorption in that they also realize the supreme truth—Brahman. Those who work at a thing with their whole heart receive help from God.
To believe blindly is to degenerate the human soul. Be an atheist if you want, but do not believe in anything unquestioningly.
To realize the spirit as spirit is practical religion. Everything else is good so far as it leads to this one grand idea.
To realize the spirit as spirit is practical religion. Everything else is good so far as it leads to this one grand idea. That realization is to be attained by renunciation, by meditation—renunciation of all the senses, cutting the knots, the chains that bind us down to matter.
To succeed you must have tremendous perseverance, tremendous will. I will drink the ocean, says the persevering soul, at my will mountains will crumble. Have that sort of energy, that sort of will, work hard, and you will reach the goal.
To succeed, you must have tremendous perseverance, tremendous will. I will rink the ocean, says the persevering soul, at my will mountains will crumble up. Have that sort of energy, that sort of will, work hard, and you will reach the goal.
To talk of evil and misery is nonsense, because they do not exist outside. If I am immune against all anger, I never feel angry. If I am proof against all hatred, I never feel hatred.
To the person who desires nothing and does not get entangled in desires, the manifold changes of nature are one panorama of beauty and sublimity.
Tremendous purity, tremendous renunciation, is the one secret of spirituality. Neither through wealth, nor through progeny, but through renunciation alone is immortality to be reached, say the Vedas. Sell all that thou hast and give to poor, and follow me, says the Christ. So all great saints and prophets have expressed it, and have carried it out in their lives. How can great spirituality come without renunciation?
Tremendous purity, tremendous renunciation, is the one secret of spirituality. How can great spirituality come without renunciation? Renunciation is the background of all religious thought wherever it be, and you will always find that as this idea of renunciation lessens, the more will the senses creep into the field of religion, and spirituality will decrease in the same ratio.
True religion is not talk, or doctrines, or theories, nor is it sectarianism. It is the relation between soul and God. Religion does not consist in erecting temples, or building churches, or attending public worship. It is not to be found in books, or in words, or in lectures, or in organizations. Religion consists in realization. We must realize God, feel God, see God, talk to God. That is religion.
Truth does not pay homage to any society, ancient or modern. Society has to pay homage to Truth or die.
Truth, purity and unselfishness—wherever these are present, there is no power below or above the sun to crush the possessor thereof. Equipped with these, one individual is able to face the whole universe in opposition.
Truth, purity, and unselfishness—wherever these are present, there is no power below or above the sun to crush the possessor thereof. Equipped with these, one individual is able to face the whole universe in opposition.
Try a little harder, and meditation comes. You do not feel the body or anything else. When you come out of it after the hour, you have had the most beautiful rest you ever had in your life. That is the only way you ever give rest to your system. Not even the deepest sleep will give you such a rest as that.
Understanding human nature is the highest knowledge, and only by knowing it can we know God. It is also a fact that the knowledge of God is the highest knowledge, and only by knowing God can we understand human nature.
Wait with patience and love and strength. If helpers are not ready now, they will come in time. Why should we be in a hurry? The real working force of all great work is in its almost unperceived beginnings.
Watch people do their most common actions; these are indeed the things that will tell you the real character of a great person.
We are ever free if we would only believe it, only have faith enough. You are the soul, free and eternal, ever free, ever blessed. Have faith enough and you will be free in a minute.
We are suffering from our own karma. It is not the fault of God. What we do is our own fault, nothing else. Why should God be blamed?
We believe that every being is divine, is God. Every soul is a sun covered over with clouds of ignorance; the difference between soul and soul is owing to the difference in density of these layers of clouds.
We believe that every being is divine, is God. Every soul is a sun covered over with clouds of ignorance; the difference between soul and soul is owing to the difference in density of these layers of clouds.
We came to enjoy; we are being enjoyed. We came to rule; we are being ruled. We came to work; we are being worked. All the time, we find that. And this comes into every detail of our life.
We can never lose what is really ours. Who can lose his being? Who can lose his very existence? If I am good, it is the existence first, and then that becomes colored with the quality of goodness. If I am evil, it is the existence first, and that becomes colored with the quality of badness. That existence is first, last, and always; it is never lost but ever present.
We cannot see outside what we are not inside. The universe is to us what the huge engine is to the miniature engine; and indication of any error in the tiny engine leads us to imagine trouble in the huge one.
We cannot see outside what we are not inside. The universe is to us what the huge engine is to the miniature engine; and indication of any error in the tiny engine leads us to imagine trouble in the huge one.
We get caught. How? Not by what we give but by what we expect. We get misery in return for our love: not from the fact that we love but from the fact that we want love in return. There is no misery where there is no want. Desire, want, is the father of all misery. Desires are bound by the laws of success and failure. Desires must bring misery.
We get caught. How? Not by what we give but by what we expect. We get misery in return for our love; not from the fact that we love, but from the fact that we want love in return. There is no misery where there is no want.
We have to go back to philosophy to treat things as they are. We are suffering from our own karma. It is not the fault of God. What we do is our own fault, nothing else. Why should God be blamed?
We must approach religion with reverence and with love, and our heart will stand up and say, this is truth, and this is untruth.
We must be bright and cheerful. Long faces do not make religion. Religion should be the most joyful thing in the world, because it is the best.
We must have friendship for all; we must be merciful toward those that are in misery; when people are happy, we ought to be happy; and to the wicked we must be indifferent. These attitudes will make the mind peaceful.
We must plunge heart and soul and body into the work. And until we are ready to sacrifice everything else to one Idea and to one alone, we never, never will see the Light.
We reap what we sow. We are the makers of our own fate. None else has the blame, none has the praise.
We want to know in order to make ourselves free. That is our life: one universal cry for freedom.
What about this marvelous experience of standing alone, discarding all help, breasting the storms of life, of working without any sense of recompense, without any sense of putrid duty, and of working a whole life, joyful, free -- not goaded on to work like slaves by false human love or ambition?Nature grinds all of us. Keep count of the ounce of pleasure you get. In the long run, nature did her work through you, and when you die your body will make other plants grow. Yet we think all the time that we are getting pleasure ourselves. Thus the wheel goes round.
What do you gain in heaven? You become gods, drink nectar, and get rheumatism. There is less misery there than on earth, but also less truth.
What I want is muscles of iron and nerves of steel, inside which dwells a mind of the same material as that of which the thunderbolt is made.
What is material and what is not material? When the world is the end and God the means to attain that end, then that is material. When God is the end and the world is only the means to attain that end, spirituality has begun.
What is material and what is not? When the world is the end and God is the means to attain that end, that is material. When God is the end and the world is only the means to attain that end, spirituality has begun.
What is the use of talking of one’s mistakes to the world? They cannot thereby be undone. For what one has done one must suffer; one must try and do better. The world sympathizes only with the strong and the powerful.
What is the world that is to be given up? It is here. I am carrying it all with me. My own body. It is all for this body that I put my hand voluntarily upon my fellow beings, just to keep it nice and give it a little pleasure; [all for this body] that I injure others and make mistakes.
What is the world that is to be given up? It is here. I am carrying it all with me. My own body. It is all for this body that I put my hand voluntarily upon my fellow human beings, just to keep it nice and give it a little pleasure. It is all for the body that I injure others and make mistakes.
What the world wants is character. The world is in need of those whose life is one burning love--selfless. That love will make every word tell like a thunderbolt. Awake, awake, great souls! The world is burning in misery. Can you sleep?Work unto death--I am with you, and when I am gone, my spirit will work with you. This life comes and goes--wealth, fame, enjoyments are only of a few days. It is better, far better, to die on the field of duty, preaching the truth than to die like a worldly worm. Advance!
What the world wants is character. The world is in need of those whose life is one burning love—selfless. That love will make every word tell like a thunderbolt. Aware, awake, great souls! The world is burning in misery. Can you sleep?
What the world wants today is twenty men and women who can dare to stand in the street yonder and say that they possess nothing but God. Who will go? Why should one fear? If this is true, what else could matter? If it is not true, what do our lives matter?
What the world wants today is twenty men and women who can dare to stand in the street yonder and say that they possess nothing but God. Who will go? Why should one fear? If this is true, what else could matter? If it is not true, what do our lives matter?
Whatever you believe, that you will be. If you believe yourselves to be sages, sages you will be tomorrow. There is nothing to obstruct you.
When once you consider an action, do not let anything dissuade you. Consult your heart, not others, and then follow its dictates.
When we can attach the mind to—or detach it from—the sense at our will, we shall really possess character. Then alone we shall have taken a long step towards freedom; before that, we are mere machines.
When we come to nonattachment, then we can understand the marvelous mystery of the universe: how it is intense activity and at the same time intense peace, how it is work every moment and rest every moment.
When we have become free, we need not go mad and throw up society and rush off to die in the forest or the cave; we shall remain where we were but we shall understand the whole thing. The same phenomena will remain but with a new meaning.
When we have become free, we need not go mad and throw up society and rush off to die in the forest or the cave; we shall remain where we were, only we shall understand the whole thing.
Whenever we attain a higher vision, the lower vision disappears of itself.
Where God is, there is no other. Where the world is, there is no God. These two will never unite. Like light and darkness. That is what I have understood from Christianity and the life of Jesus. Isn’t that also Buddhism? Isn’t that Hinduism? Isn’t that Islam? Isn’t that the teaching of all the great sages and teachers?
Where God is, there is no other. Where world is, there is no God. These two will never unite. Like light and darkness.
Who makes us ignorant? We ourselves. We put our hands over our eyes and weep that it is dark.
Who will bring light to the poor? Who will travel from door to door bringing education to them? Let these people be your God—think of them, work for them, pray for them incessantly. The Lord will show you the way.
Whose meditation is real and effective? Who can really surrender to the will of God? Only the person whose mind has been purified by selfless work.
Why are people so afraid? The answer is that they have made themselves helpless and dependent on others. We are so lazy, we do not want to do anything ourselves. We want a Personal God, a Savior or a Prophet to do everything for us.
Woman has suffered for eons, and that has given her infinite patience and infinite perseverance.
Women will work out their destinies—much better, too, than men can ever do for them. All the mischief to women has come because men undertook to shape the destiny of women.
Work a little harder at meditation and it comes. You do not feel the body or anything else. When you come out of it after the hour, you have had the most beautiful rest you ever had in your life. That is the only way you ever give rest to your system.
Work and worship are necessary to take away the veil, to lift off the bondage and illusion.
Work on with the intrepidity of a lion but at the same time with the tenderness of a flower.
Work unto death—I am with you, and when I am gone, my spirit will work with you. This life comes and goes—wealth, fame, enjoyments are only of a few days. It is better, far better, to die on the field of duty, preaching the truth, than to die like a worldly worm. Advance!
Worship of society and popular opinions is idolatry. The soul has no sex, no country, no place, no time.
You cannot believe in God until you believe in yourself.
You must avoid excessive merriment. A mind in that state never becomes calm; it becomes fickle. Excessive merriment will always be followed by sorrow. Tears and laughter are near kin. People so often run from one extreme to the other.
You, as body, mind, or soul, are a dream, but what you really are, is Being, Consciousness, Bliss. You are the God of this universe. You are creating the whole universe and drawing it in.
Your Atman is the support of the universe—whose support do you stand in need of? Wait with patience and love and strength. If helpers are not ready now, they will come in time. Why should we be in a hurry? The real working force of all great work is in its almost unperceived beginnings.";
	$quotes=explode( "\n", $quotes );
	$quote=$quotes[ mt_rand( 0, count ($quotes)-1 ) ];
	return ( wptexturize( $quote ) ); 
    }  
}  
$SVQuotes = new SVQuotes();  

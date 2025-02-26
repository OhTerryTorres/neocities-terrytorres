function Superlist() {
    let data = [
        new PlayPost('Andres left for L.A.', '/plays/posts/2012_07_04_andres-left-for-l-a_index.html'),
        new PlayPost('Ness&#8217; Family', '/plays/posts/2012_07_05_ness-family_index.html'),
        new PlayPost('Your Name, Please', '/plays/posts/2012_07_05_your-name-please_index.html'),
        new PlayPost('Bad Guys in the Hills', '/plays/posts/2012_07_06_bad-guys-in-the-hills_index.html'),
        new PlayPost('The Coming of Buzz Buzz', '/plays/posts/2012_07_06_the-coming-of-buzz-buzz_index.html'),
        new PlayPost('Onett: Bad kids and dumb adults try to ruin summer for everyone again', '/plays/posts/2012_07_07_onettbad-kids-and-dumb-adults-try-to-ruin-summer-for-everyone-again_index.html'),
        new PlayPost('PROTIP: Get all the cookies', '/plays/posts/2012_07_07_protip-get-all-the-cookies_index.html'),
        new PlayPost('The Minch Family', '/plays/posts/2012_07_08_the-minch-family_index.html'),
        new PlayPost('Dungeon anatomy &#8211; A Giant Step in the right direction', '/plays/posts/2012_07_10_dungeon-anatomy-a-giant-step-in-the-right-direction_index.html'),
        new PlayPost('Death and ATM Fees', '/plays/posts/2012_07_11_death-and-atm-fees_index.html'),
        new PlayPost('Hug tha Police', '/plays/posts/2012_07_11_hug-tha-police_index.html'),
        new PlayPost('Trolling in Twoson', '/plays/posts/2012_07_13_trolling-in-twoson_index.html'),
        new PlayPost('Peaceful Rest Valley, and a suprise', '/plays/posts/2012_07_14_peaceful-rest-valley-and-a-suprise_index.html'),
        new PlayPost('Happy Happy, Joy Joy, Mani Mani', '/plays/posts/2012_07_17_happy-happy-joy-joy-mani-mani_index.html'),
        new PlayPost('Paula, a woman far away', '/plays/posts/2012_07_18_paula-a-woman-far-away_index.html'),
        new PlayPost('Low-life scum and gullible musicians save the day', '/plays/posts/2012_07_20_low-life-scum-and-gullible-musicians-save-the-day_index.html'),
        new PlayPost('Jeff&#8217;s &#8220;Family&#8221;', '/plays/posts/2012_07_28_jeffs-family_index.html'),
        new PlayPost('More about Dad', '/plays/posts/2012_08_04_more-about-dad_index.html'),
        new PlayPost('Not Lackin&#8217; Any Meat', '/plays/posts/2012_08_07_not-lackin-any-meat_index.html'),
        new PlayPost('Everybody hates Dusty Dunes Desert but me', '/plays/posts/2012_08_10_everybody-hates-dusty-dunes-desert-but-me_index.html'),
        new PlayPost('A Troll Too Far', '/plays/posts/2012_08_14_a-troll-too-far_index.html'),
        new PlayPost('Fourside, Part 1: Death is Only the Beginning', '/plays/posts/2012_08_28_fourside-part-1-death-is-only-the-beginning_index.html'),
        new PlayPost('Fourside, Part 2: Moonside and the Horrors of the American Dream', '/plays/posts/2012_10_02_fourside-part-2-moonside-and-the-horrors-of-the-american-dream_index.html'),
        new PlayPost('So I&#8217;ve been playing Xenoblade Chronicles.', '/plays/posts/2012_10_31_so-ive-been-playing-xenoblade-chronicles_index.html'),
        new PlayPost('So I played Dishonored', '/plays/posts/2012_11_07_so-i-played-dishonored_index.html'),
        new PlayPost('So I started Assassin&#8217;s Creed III', '/plays/posts/2012_11_13_so-i-started-assassins-creed-iii_index.html'),
        new PlayPost('Fourside, Part 3: An Annoying Apotheosis', '/plays/posts/2012_11_16_fourside-part-3-an-annoying-apotheosis_index.html'),
        new PlayPost('2012 in Games', '/plays/posts/2012_12_31_2012-in-games_index.html'),
        new PlayPost('Earthbound is available for 30 yen (33 cents)', '/plays/posts/2013_01_25_earthbound-is-available-for-30-yen-33-cents_index.html'),
        new PlayPost('So I played Virtue&#8217;s Last Reward', '/plays/posts/2013_01_25_so-i-played-virtues-last-reward_index.html'),
        new PlayPost('So I DIDN&#8217;T play Far Cry 3&#8230;', '/plays/posts/2013_01_28_so-i-didnt-play-far-cry-3_index.html'),
        new PlayPost('So I played DmC', '/plays/posts/2013_02_07_so-i-played-dmc_index.html'),
        new PlayPost('So I played Metal Gear Rising: Revengeance and Silent Hill: Downpour', '/plays/posts/2013_03_03_so-i-played-metal-gear-rising-revengeance-and-silent-hill-downpour_index.html'),
        new PlayPost('So I played Bayonetta again.', '/plays/posts/2013_04_03_so-i-played-bayonetta-again_index.html'),
        new PlayPost('So I finished Bioshock Infinite.', '/plays/posts/2013_04_11_so-i-finished-bioshock-infinite_index.html'),
        new PlayPost('Re: Used games killing the industry', '/plays/posts/2013_05_25_re-used-games-killing-the-industry_index.html'),
        new PlayPost('re: Abstraction', '/plays/posts/2013_06_19_re-abstraction_index.html'),
        new PlayPost('So I played Remember Me, and then I stopped.', '/plays/posts/2013_06_19_so-i-played-remember-me-and-then-i-stopped_index.html'),
        new PlayPost('Highwind just finished Panzer Dragoon Saga', '/plays/posts/2013_06_29_highwind-just-finished-panzer-dragoon-saga_index.html'),
        new PlayPost('Holy cow, I just realized something about Metal Gear Solid 2', '/plays/posts/2013_08_03_holy-cow-i-just-realized-something-about-metal-gear-solid-2_index.html'),
        new PlayPost('Earthbound and Deadly Premonition', '/plays/posts/2013_08_26_earthbound-and-deadly-premonition_index.html'),
        new PlayPost('So I finally finished Soul Sacrifice (or, The Nature of Memories)', '/plays/posts/2013_09_18_so-i-finally-finished-soul-sacrifice-or-the-nature-of-memories_index.html'),
        new PlayPost('2013 in Games', '/plays/posts/2013_12_30_2013-in-games_index.html'),
        new PlayPost('So I watched Beyond: Two Souls', '/plays/posts/2014_01_02_so-i-watched-beyond-two-souls_index.html'),
        new PlayPost('So I started playing Grand Theft Auto 5', '/plays/posts/2014_01_15_so-i-started-playing-grand-theft-auto-5_index.html'),
        new PlayPost('The Torres Bros. Podcast Review: Bioshock Infinite', '/plays/posts/2014_01_30_the-torres-bros-podcast-review-bioshock-infinite_index.html'),
        new PlayPost('The Torres Bros. Podcast Review The 3rd Birthday', '/plays/posts/2014_01_30_the-torres-bros-podcast-review-the-3rd-birthday_index.html'),
        new PlayPost('In defense of Nash from Lunar', '/plays/posts/2014_03_18_in-defense-of-nash-from-lunar_index.html'),
        new PlayPost('Robin Williams and the Hero of Time', '/plays/posts/2014_08_12_robin-williams-and-the-hero-of-time_index.html'),
        new PlayPost('So I played Suikoden (or, Sometimes old ways are best)', '/plays/posts/2015_02_04_so-i-played-suikoden-or-sometimes-old-ways-are-best_index.html'),
        new PlayPost('Tifa and Aeris', '/plays/posts/2015_08_01_tifa-and-aeris_index.html'),
        new PlayPost('United States Gun Culture in Parasite Eve', '/plays/posts/2015_12_03_united-states-gun-culture-in-parasite-eve_index.html'),
        new PlayPost('I think the Final Fantasy XV Platinum Demo sucked, and the users at Giant Bomb agree.', '/plays/posts/2016_04_03_i-think-the-final-fantasy-xv-platinum-demo-sucked-and-the-users-at-giant-bomb-agree_index.html'),
        new PlayPost('Persona 5 is great, but its characters&#8230;', '/plays/posts/2017_04_11_persona-5-is-great-but-its-characters_index.html'),
        new PlayPost('Lame shit in Persona 5 that could have been fixed', '/plays/posts/2017_06_16_lame-shit-in-persona-5-that-could-have-been-fixed_index.html'),
        new PlayPost('Moving Forward', '/plays/posts/2017_06_23_moving-forward_index.html'),
        new PlayPost('What I get and did not get from NieR: Automata', '/plays/posts/2017_09_20_what-i-get-and-did-not-get-from-nier-automata_index.html'),
        new PlayPost('So I played The Witcher 3: Wild Hunt', '/plays/posts/2020_06_29_so-i-played-the-witcher-3-wild-hunt_index.html'),
        new PlayPost('The Greatest Christmas Songs of All Time', '/plays/posts/2020_12_15_the-greatest-christmas-songs-of-all-time_index.html'),
        new PlayPost('The New Torres Christmas Canon', '/plays/posts/2020_12_15_the-new-torres-christmas-canon_index.html'),
        new PlayPost('The Promised Neverland was lame from the start', '/plays/posts/2021_12_07_the-promised-neverland-was-lame-from-the-start_index.html'),
        new PlayPost('Xenogears: Hostage to a homily', '/plays/posts/2022_04_18_xenogears-hostage-to-a-homily_index.html'),
        new PlayPost('Tales of Symphonia &#8211; Pathetic', '/plays/posts/2022_09_13_tales-of-symphonia-pathetic_index.html'),        
    ];
    return data;
}

class PlayPost {
    constructor(title, destination) {
        this.title = title;
        this.destination = destination;
    }
}

{/* <a href="/plays/2022/09/13/tales-of-symphonia-pathetic/index.html">Tales of Symphonia &#8211; Pathetic</a></br></br>
    <a href="/plays/2022/04/18/xenogears-hostage-to-a-homily/index.html">Xenogears: Hostage to a homily</a></br></br>
    <a href="/plays/2021/12/07/the-promised-neverland-was-lame-from-the-start/index.html">The Promised Neverland was lame from the start</a></br></br>
    <a href="/plays/2020/12/15/the-new-torres-christmas-canon/index.html">The New Torres Christmas Canon</a></br></br>
    <a href="/plays/2020/12/15/the-greatest-christmas-songs-of-all-time/index.html">The Greatest Christmas Songs of All Time</a></br></br>
    <a href="/plays/2020/06/29/so-i-played-the-witcher-3-wild-hunt/index.html">So I played The Witcher 3: Wild Hunt</a></br></br>
    <a href="/plays/2017/09/20/what-i-get-and-did-not-get-from-nier-automata/index.html">What I get and did not get from NieR: Automata</a></br></br>
    <a href="/plays/2017/06/23/moving-forward/index.html">Moving Forward</a></br></br>
    <a href="/plays/2017/06/16/lame-shit-in-persona-5-that-could-have-been-fixed/index.html">Lame shit in Persona 5 that could have been fixed</a></br></br>
    <a href="/plays/2017/04/11/persona-5-is-great-but-its-characters/index.html">Persona 5 is great, but its characters&#8230;</a></br></br>
    <a href="/plays/2016/04/03/i-think-the-final-fantasy-xv-platinum-demo-sucked-and-the-users-at-giant-bomb-agree/index.html">I think the Final Fantasy XV Platinum Demo sucked, and the users at Giant Bomb agree.</a></br></br>
    <a href="/plays/2015/12/03/united-states-gun-culture-in-parasite-eve/index.html">United States Gun Culture in Parasite Eve</a></br></br>
    <a href="/plays/2015/08/01/tifa-and-aeris/index.html">Tifa and Aeris, or Aerith</a></br></br>
    <a href="/plays/2015/02/04/so-i-played-suikoden-or-sometimes-old-ways-are-best/index.html">So I played Suikoden (or, Sometimes old ways are best)</a></br></br>
    <a href="/plays/2014/08/12/robin-williams-and-the-hero-of-time/index.html">Robin Williams and the Hero of Time</a></br></br>
    <a href="/plays/2014/03/18/in-defense-of-nash-from-lunar/index.html">In defense of Nash from Lunar</a></br></br>
    <a href="/plays/2014/01/30/the-torres-bros-podcast-review-the-3rd-birthday/index.html">The Torres Bros. Podcast Review The 3rd Birthday</a></br></br>
    <a href="/plays/2014/01/30/the-torres-bros-podcast-review-bioshock-infinite/index.html">The Torres Bros. Podcast Review: Bioshock Infinite</a></br></br>
    <a href="/plays/2014/01/15/so-i-started-playing-grand-theft-auto-5/index.html">So I started playing Grand Theft Auto 5</a></br></br>
    <a href="/plays/2014/01/02/so-i-watched-beyond-two-souls/index.html">So I watched Beyond: Two Souls</a></br></br>
    <a href="/plays/2013/12/30/2013-in-games/index.html">2013 in Games</a></br></br>
    <a href="/plays/2013/09/18/so-i-finally-finished-soul-sacrifice-or-the-nature-of-memories/index.html">So I finally finished Soul Sacrifice (or, The Nature of Memories)</a></br></br>
    <a href="/plays/2013/08/26/earthbound-and-deadly-premonition/index.html">Earthbound and Deadly Premonition</a></br></br>
    <a href="/plays/2013/08/03/holy-cow-i-just-realized-something-about-metal-gear-solid-2/index.html">Holy cow, I just realized something about Metal Gear Solid 2</a></br></br>
    <a href="/plays/2013/06/29/highwind-just-finished-panzer-dragoon-saga/index.html">Highwind just finished Panzer Dragoon Saga</a></br></br>
    <a href="/plays/2013/06/19/so-i-played-remember-me-and-then-i-stopped/index.html">So I played Remember Me, and then I stopped.</a></br></br>
    <a href="/plays/2013/06/19/re-abstraction/index.html">re: Abstraction</a></br></br>
    <a href="/plays/2013/05/25/re-used-games-killing-the-industry/index.html">Re: Used games killing the industry</a></br></br>
    <a href="/plays/2013/04/11/so-i-finished-bioshock-infinite/index.html">So I finished Bioshock Infinite.</a></br></br>
    <a href="/plays/2013/04/03/so-i-played-bayonetta-again/index.html">So I played Bayonetta again.</a></br></br>
    <a href="/plays/2013/03/03/so-i-played-metal-gear-rising-revengeance-and-silent-hill-downpour/index.html">So I played Metal Gear Rising: Revengeance and Silent Hill: Downpour</a></br></br>
    <a href="/plays/2013/02/07/so-i-played-dmc/index.html">So I played DmC</a></br></br>
    <a href="/plays/2013/01/28/so-i-didnt-play-far-cry-3/index.html">So I DIDN&#8217;T play Far Cry 3&#8230;</a></br></br>
    <a href="/plays/2013/01/25/so-i-played-virtues-last-reward/index.html">So I played Virtue&#8217;s Last Reward</a></br></br>
    <a href="/plays/2013/01/25/earthbound-is-available-for-30-yen-33-cents/index.html">Earthbound is available for 30 yen (33 cents)</a></br></br>
    <a href="/plays/2012/12/31/2012-in-games/index.html">2012 in Games</a></br></br>
    <a href="/plays/2012/11/16/fourside-part-3-an-annoying-apotheosis/index.html">Fourside, Part 3: An Annoying Apotheosis</a></br></br>
    <a href="/plays/2012/11/13/so-i-started-assassins-creed-iii/index.html">So I started Assassin&#8217;s Creed III</a></br></br>
    <a href="/plays/2012/11/07/so-i-played-dishonored/index.html">So I played Dishonored</a></br></br>
    <a href="/plays/2012/10/31/so-ive-been-playing-xenoblade-chronicles/index.html">So I&#8217;ve been playing Xenoblade Chronicles.</a></br></br>
    <a href="/plays/2012/10/02/fourside-part-2-moonside-and-the-horrors-of-the-american-dream/index.html">Fourside, Part 2: Moonside and the Horrors of the American Dream</a></br></br>
    <a href="/plays/2012/08/28/fourside-part-1-death-is-only-the-beginning/index.html">Fourside, Part 1: Death is Only the Beginning</a></br></br>
    <a href="/plays/2012/08/14/a-troll-too-far/index.html">A Troll Too Far</a></br></br>
    <a href="/plays/2012/08/10/everybody-hates-dusty-dunes-desert-but-me/index.html">Everybody hates Dusty Dunes Desert but me</a></br></br>
    <a href="/plays/2012/08/07/not-lackin-any-meat/index.html">Not Lackin&#8217; Any Meat</a></br></br>
    <a href="/plays/2012/08/04/more-about-dad/index.html">More about Dad</a></br></br>
    <a href="/plays/2012/07/28/jeffs-family/index.html">Jeff&#8217;s &#8220;Family&#8221;</a></br></br>
    <a href="/plays/2012/07/20/low-life-scum-and-gullible-musicians-save-the-day/index.html">Low-life scum and gullible musicians save the day</a></br></br>
    <a href="/plays/2012/07/18/paula-a-woman-far-away/index.html">Paula, a woman far away</a></br></br>
    <a href="/plays/2012/07/17/happy-happy-joy-joy-mani-mani/index.html">Happy Happy, Joy Joy, Mani Mani</a></br></br>
    <a href="/plays/2012/07/14/peaceful-rest-valley-and-a-suprise/index.html">Peaceful Rest Valley, and a suprise</a></br></br>
    <a href="/plays/2012/07/13/trolling-in-twoson/index.html">Trolling in Twoson</a></br></br>
    <a href="/plays/2012/07/11/hug-tha-police/index.html">Hug tha Police</a></br></br>
    <a href="/plays/2012/07/11/death-and-atm-fees/index.html">Death and ATM Fees</a></br></br>
    <a href="/plays/2012/07/10/dungeon-anatomy-a-giant-step-in-the-right-direction/index.html">Dungeon anatomy &#8211; A Giant Step in the right direction</a></br></br>
    <a href="/plays/2012/07/08/the-minch-family/index.html">The Minch Family</a></br></br>
    <a href="/plays/2012/07/07/protip-get-all-the-cookies/index.html">PROTIP: Get all the cookies</a></br></br>
    <a href="/plays/2012/07/07/onettbad-kids-and-dumb-adults-try-to-ruin-summer-for-everyone-again/index.html">Onett: Bad kids and dumb adults try to ruin summer for everyone again</a></br></br>
    <a href="/plays/2012/07/06/the-coming-of-buzz-buzz/index.html">The Coming of Buzz Buzz</a></br></br>
    <a href="/plays/2012/07/06/bad-guys-in-the-hills/index.html">Bad Guys in the Hills</a></br></br>
    <a href="/plays/2012/07/05/your-name-please/index.html">Your Name, Please</a></br></br>
    <a href="/plays/2012/07/05/ness-family/index.html">Ness&#8217; Family</a></br></br>
    <a href="/plays/2012/07/04/andres-left-for-l-a/index.html">Andres left for L.A.</a></br></br> */}
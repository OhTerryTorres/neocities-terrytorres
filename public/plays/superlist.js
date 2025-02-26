function Superlist() {
    let data = [
        new PlayPost("Tales of Symphonia - Pathetic", "/plays/posts/2022_09_13_tales-of-symphonia-pathetic.html"), 
        new PlayPost("Xenogears: Hostage to a homily", "/plays/posts/2022_04_18_xenogears-hostage-to-a-homily.html"),
        new PlayPost("The Promised Neverland was lame from the start", "/plays/posts/2021_12_07_the-promised-neverland-was-lame-from-the-start.html"),
        new PlayPost("The New Torres Christmas Canon", "/plays/posts/2020_12_15_the-new-torres-christmas-canon.html"),
        new PlayPost("The Greatest Christmas Songs of All Time", "/plays/posts/2020_12_15_the-greatest-christmas-songs-of-all-time.html"),
        new PlayPost("So I played The Witcher 3: Wild Hunt", "/plays/posts/2020_06_29_so-i-played-the-witcher-3-wild-hunt.html"),
        new PlayPost("What I get and did not get from NieR: Automata", "/plays/posts/2017_09_20_what-i-get-and-did-not-get-from-nier-automata.html"),
        new PlayPost("Moving Forward", "/plays/posts/2017_06_23_moving-forward.html"),
        new PlayPost("Lame shit in Persona 5 that could have been fixed", "/plays/posts/2017_06_16_lame-shit-in-persona-5-that-could-have-been-fixed.html"),
        new PlayPost("Persona 5 is great, but its characters...;", "/plays/posts/2017_04_11_persona-5-is-great-but-its-characters.html"),
        new PlayPost("I think the Final Fantasy XV Platinum Demo sucked, and the users at Giant Bomb agree.", "/plays/posts/2016_04_03_i-think-the-final-fantasy-xv-platinum-demo-sucked-and-the-users-at-giant-bomb-agree.html"),
        new PlayPost("United States Gun Culture in Parasite Eve", "/plays/posts/2015_12_03_united-states-gun-culture-in-parasite-eve.html"),
        new PlayPost("Tifa and Aeris", "/plays/posts/2015_08_01_tifa-and-aeris.html"),
        new PlayPost("So I played Suikoden (or, Sometimes old ways are best)", "/plays/posts/2015_02_04_so-i-played-suikoden-or-sometimes-old-ways-are-best.html"),
        new PlayPost("Robin Williams and the Hero of Time", "/plays/posts/2014_08_12_robin-williams-and-the-hero-of-time.html"),
        new PlayPost("In defense of Nash from Lunar", "/plays/posts/2014_03_18_in-defense-of-nash-from-lunar.html"),
        new PlayPost("The Torres Bros. Podcast Review The 3rd Birthday", "/plays/posts/2014_01_30_the-torres-bros-podcast-review-the-3rd-birthday.html"),
        new PlayPost("The Torres Bros. Podcast Review: Bioshock Infinite", "/plays/posts/2014_01_30_the-torres-bros-podcast-review-bioshock-infinite.html"),
        new PlayPost("So I started playing Grand Theft Auto 5", "/plays/posts/2014_01_15_so-i-started-playing-grand-theft-auto-5.html"),
        new PlayPost("So I watched Beyond: Two Souls", "/plays/posts/2014_01_02_so-i-watched-beyond-two-souls.html"),
        new PlayPost("2013 in Games", "/plays/posts/2013_12_30_2013-in-games.html"),
        new PlayPost("So I finally finished Soul Sacrifice (or, The Nature of Memories)", "/plays/posts/2013_09_18_so-i-finally-finished-soul-sacrifice-or-the-nature-of-memories.html"),
        new PlayPost("Earthbound and Deadly Premonition", "/plays/posts/2013_08_26_earthbound-and-deadly-premonition.html"),
        new PlayPost("Holy cow, I just realized something about Metal Gear Solid 2", "/plays/posts/2013_08_03_holy-cow-i-just-realized-something-about-metal-gear-solid-2.html"),
        new PlayPost("Highwind just finished Panzer Dragoon Saga", "/plays/posts/2013_06_29_highwind-just-finished-panzer-dragoon-saga.html"),
        new PlayPost("So I played Remember Me, and then I stopped.", "/plays/posts/2013_06_19_so-i-played-remember-me-and-then-i-stopped.html"),
        new PlayPost("re: Abstraction", "/plays/posts/2013_06_19_re-abstraction.html"),
        new PlayPost("Re: Used games killing the industry", "/plays/posts/2013_05_25_re-used-games-killing-the-industry.html"),
        new PlayPost("So I finished Bioshock Infinite.", "/plays/posts/2013_04_11_so-i-finished-bioshock-infinite.html"),
        new PlayPost("So I played Bayonetta again.", "/plays/posts/2013_04_03_so-i-played-bayonetta-again.html"),
        new PlayPost("So I played Metal Gear Rising: Revengeance and Silent Hill: Downpour", "/plays/posts/2013_03_03_so-i-played-metal-gear-rising-revengeance-and-silent-hill-downpour.html"),
        new PlayPost("So I played DmC", "/plays/posts/2013_02_07_so-i-played-dmc.html"),
        new PlayPost("So I DIDN'T play Far Cry 3...;", "/plays/posts/2013_01_28_so-i-didnt-play-far-cry-3.html"),
        new PlayPost("So I played Virtue's Last Reward", "/plays/posts/2013_01_25_so-i-played-virtues-last-reward.html"),
        new PlayPost("Earthbound is available for 30 yen (33 cents)", "/plays/posts/2013_01_25_earthbound-is-available-for-30-yen-33-cents.html"),
        new PlayPost("2012 in Games", "/plays/posts/2012_12_31_2012-in-games.html"),
        new PlayPost("Fourside, Part 3: An Annoying Apotheosis", "/plays/posts/2012_11_16_fourside-part-3-an-annoying-apotheosis.html"),
        new PlayPost("So I started Assassin's Creed III", "/plays/posts/2012_11_13_so-i-started-assassins-creed-iii.html"),
        new PlayPost("So I played Dishonored", "/plays/posts/2012_11_07_so-i-played-dishonored.html"),
        new PlayPost("So I've been playing Xenoblade Chronicles.", "/plays/posts/2012_10_31_so-ive-been-playing-xenoblade-chronicles.html"),
        new PlayPost("Fourside, Part 2: Moonside and the Horrors of the American Dream", "/plays/posts/2012_10_02_fourside-part-2-moonside-and-the-horrors-of-the-american-dream.html"),
        new PlayPost("Fourside, Part 1: Death is Only the Beginning", "/plays/posts/2012_08_28_fourside-part-1-death-is-only-the-beginning.html"),
        new PlayPost("A Troll Too Far", "/plays/posts/2012_08_14_a-troll-too-far.html"),
        new PlayPost("Everybody hates Dusty Dunes Desert but me", "/plays/posts/2012_08_10_everybody-hates-dusty-dunes-desert-but-me.html"),
        new PlayPost("Not Lackin' Any Meat", "/plays/posts/2012_08_07_not-lackin-any-meat.html"),
        new PlayPost("More about Dad", "/plays/posts/2012_08_04_more-about-dad.html"),
        new PlayPost("Jeff's \"Family\"", "/plays/posts/2012_07_28_jeffs-family.html"),
        new PlayPost("Low-life scum and gullible musicians save the day", "/plays/posts/2012_07_20_low-life-scum-and-gullible-musicians-save-the-day.html"),
        new PlayPost("Paula, a woman far away", "/plays/posts/2012_07_18_paula-a-woman-far-away.html"),
        new PlayPost("Happy Happy, Joy Joy, Mani Mani", "/plays/posts/2012_07_17_happy-happy-joy-joy-mani-mani.html"),
        new PlayPost("Peaceful Rest Valley, and a suprise", "/plays/posts/2012_07_14_peaceful-rest-valley-and-a-suprise.html"),
        new PlayPost("Trolling in Twoson", "/plays/posts/2012_07_13_trolling-in-twoson.html"),
        new PlayPost("Hug tha Police", "/plays/posts/2012_07_11_hug-tha-police.html"),
        new PlayPost("Death and ATM Fees", "/plays/posts/2012_07_11_death-and-atm-fees.html"),
        new PlayPost("Dungeon anatomy - A Giant Step in the right direction", "/plays/posts/2012_07_10_dungeon-anatomy-a-giant-step-in-the-right-direction.html"),
        new PlayPost("The Minch Family", "/plays/posts/2012_07_08_the-minch-family.html"),
        new PlayPost("PROTIP: Get all the cookies", "/plays/posts/2012_07_07_protip-get-all-the-cookies.html"),
        new PlayPost("Onett: Bad kids and dumb adults try to ruin summer for everyone again", "/plays/posts/2012_07_07_onettbad-kids-and-dumb-adults-try-to-ruin-summer-for-everyone-again.html"),
        new PlayPost("The Coming of Buzz Buzz", "/plays/posts/2012_07_06_the-coming-of-buzz-buzz.html"),
        new PlayPost("Bad Guys in the Hills", "/plays/posts/2012_07_06_bad-guys-in-the-hills.html"),
        new PlayPost("Your Name, Please", "/plays/posts/2012_07_05_your-name-please.html"),
        new PlayPost("Ness' Family", "/plays/posts/2012_07_05_ness-family.html"),
        new PlayPost("Andres left for L.A.", "/plays/posts/2012_07_04_andres-left-for-l-a.html"),       
    ];
    return data;
}

class PlayPost {
    constructor(title, destination) {
        this.title = title;
        this.destination = destination;
    }
}
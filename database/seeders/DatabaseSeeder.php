<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\Stack;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        About::create([
            "title" => "Hi, Im Ivan Adrianto",
            "lead" => "Full Stack Developer",
            "content" => "This is Ivan, a passionate software developer who creates magic with Javascript. Currently working as front end developer. He also developed some backend and mobile apps. For him, coding is like love. Sometimes it makes you frustrated, but you just cannot leave it.",
            "email" => "ivanadrianto64@gmail.com",
            "links" => json_encode([
                "linkedin" => "https://www.linkedin.com/in/ivan-adrianto-a02a251b8/",
                "github" => "https://github.com/ivan-adrianto",
                "medium" => "https://ivanadrianto.medium.com/",
                "instagram" => "https://www.instagram.com/ivanadrianto/ "
            ]),
            "created_at" => now(),
            "updated_at" => now()
        ]);

        Stack::insert([
            [
                "name" => "Front End Web Development",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Mobile Development",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Back End Development",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Other",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);

        Portfolio::insert([
            [
                "title" => "Admin2Win",
                "description" => "Admin2Win is an app used for construction worker and company in Belgium. In ETS, the construction workers can add to do list, track their working time, checking their agenda, etc. While their manager can check on the workers tracked time, create agenda, managing clients, etc.",
                "image" => "/img/portfolio/ets.png",
                "tech_stack" => "Angular, Ionic, Express JS, MySQL, Jira, Bitbucket",
                "link" => "",
                "link_text" => "",
                "type" => "professional",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "GPSpeak",
                "description" => "GPSpeak is a mobile app that you can use to create a note by using your voice, and will also tag the location. You can share the note with other users so the other users will know if there is any information about certain places.",
                "image" => "/img/portfolio/gpspeak.png",
                "tech_stack" => "React Native, Redux, Jira, Bitbucket",
                "link" => "",
                "link_text" => "",
                "type" => "professional",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "VC Gamers Marketplace",
                "description" => "VC Gamers Marketplace is a marketplace that connect digital products seller to their buyer",
                "image" => "/img/portfolio/vcg-marketplace.png",
                "tech_stack" => "Vue, Bootstrap, Vuex, Nuxt, Click Up",
                "link" => "https://www.vcgamers.com/",
                "link_text" => "VC Gamers Marketplace link",
                "type" => "professional",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "\$VCG Token Web",
                "description" => "VCG Token website is the website that's used as official information about \$VCG Token, a cryptocurrency created by VCGamers",
                "image" => "/img/portfolio/vcg-token.png",
                "tech_stack" => "React.js, Next.js, Bootstrap, Trello",
                "link" => "https://www.vcgamers.com/token/",
                "link_text" => "VCG Token website link",
                "type" => "professional",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "Batumbu",
                "description" => "Batumbu is a Peer to Peer Lending app requested by Skyshi's client.",
                "image" => "/img/portfolio/batumbu.png",
                "tech_stack" => "React.js, Material UI, Redux, Jira",
                "link" => "https://batumbu.id/",
                "link_text" => "Batumbu Link",
                "type" => "professional",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "Iris",
                "description" => "Iris is a platform that connect writer and company which needs articles requested by Skyshi's client",
                "image" => "/img/portfolio/iris.png",
                "tech_stack" => "React.js, Bootstrap - Prime React, Redux, Firebase",
                "link" => "https://irisnco.id/",
                "link_text" => "Iris Link",
                "type" => "professional",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "Vania",
                "description" => "Vania is a platform used to help recruiter in recruitment process. Its main features are online interview with recording and candidate competency highlighter requested by Skyshi's client",
                "image" => "/img/portfolio/vania.png",
                "tech_stack" => "React.js, Bootstrap, Redux, Firebase",
                "link" => "https://www.talentlytica.com/vania",
                "link_text" => "Vania Link (It's a paid app, you may need to request for demo to try it)",
                "type" => "professional",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "Acuityquick",
                "description" => "Acuityquick is a platform to create a highly customized survey with rich response analysis tools requested by Skyshi's client",
                "image" => "/img/portfolio/gpspeak.png",
                "tech_stack" => "React.js, Bootstrap, Redux",
                "link" => "https://staging.d2p79iz3whbra.amplifyapp.com/",
                "link_text" => "Acuityquick Link (staging link -- the product development was held)",
                "type" => "professional",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "Finfini",
                "description" => "Finfini is a fintech company which provides endpoint to connect to several Indonesian banks and also KTP Scan. My team and I from Skyshi and Finfini created the dashboard for the admin and client for service transactions",
                "image" => "/img/portfolio/finfini.png",
                "tech_stack" => "React.js, Next.js, Bootstrap, Redux",
                "link" => "https://client.finfini.com/",
                "link_text" => "Finfini Link (client dashboard)",
                "type" => "professional",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "Sayembara Mobile App",
                "description" => "Sayembara is a mobile app in which users can join a design contest, submit their design,
                and see other contestants submission, as well as their own submissions.",
                "image" => "/img/portfolio/sayembara.png",
                "tech_stack" => "React Native, Redux, React Native Snap Carousel",
                "link" => "https://drive.google.com/file/d/1xKe9eb4ckZ6nijJ8x_UrnnVZqRtzgHJ0/view?usp=sharing",
                "link_text" => "Sayembara Mobile App Link",
                "type" => "personal",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "Sayembara API",
                "description" => "This is the API used for Sayembara, a mobile app for design contest",
                "image" => "/img/portfolio/sayembara-api.png",
                "tech_stack" => "Node.js, Express JS, Sequelize, AWS",
                "link" => "https://github.com/ivan-adrianto/sayembara-be",
                "link_text" => "Sayembara API Github",
                "type" => "personal",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "MilanTV Mobile App",
                "description" => "MilanTV is a mobile app in which users can give reviews to moviews, as well as seeing
                other users' reviews.",
                "image" => "/img/portfolio/milantv-rn.png",
                "tech_stack" => "React Native, Redux, Redux Saga",
                "link" => "https://drive.google.com/file/d/17bEjd7lNHVNLUT8kroR3wAFvQ9drRM06/view?usp=sharing",
                "link_text" => "MilanTV Mobile App Link",
                "type" => "personal",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "MIlanTV API",
                "description" => "This is the API used for movie review app, MilanTV",
                "image" => "/img/portfolio/milantv-api.png",
                "tech_stack" => "Node Js, Express JS, Sequelize, AWS",
                "link" => "https://github.com/ivan-adrianto/milantv-api",
                "link_text" => "MilanTV API Github",
                "type" => "personal",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "Pokemon App",
                "description" => "This is a web app that shows list of Pokemon, and you can catch as well as release
                Pokemons there",
                "image" => "/img/portfolio/pokemon.png",
                "tech_stack" => "React.js, Next.js, Emotion",
                "link" => "https://pokemon-app-ivan.vercel.app/",
                "link_text" => "Pokemon App Link",
                "type" => "personal",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "To Do List App",
                "description" => "This is a to do list app. You can create, modify, and remove your todo",
                "image" => "/img/portfolio/todo.png",
                "tech_stack" => "React.js, Bootstrap, Redux",
                "link" => "https://ivan-todo-devrank.netlify.app/",
                "link_text" => "To Do List Link",
                "type" => "personal",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "Milan TV Web",
                "description" => "Milan TV is one of my projects which my team and I created in Glints Academy Bootcamp. This is a movie list and review app. Unfortunately, the endpoint for login and creating review is unavailable. Thus, the review only client-sided. And the login is just dummy feature",
                "image" => "/img/portfolio/milantv.png",
                "tech_stack" => "React.js, Bootstrap",
                "link" => "https://milan-tv.herokuapp.com",
                "link_text" => "Milan TV Link",
                "type" => "personal",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);

        Skill::insert([
            [
                "name" => "HTML",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CSS",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Javascript",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Typescript",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "React.js",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Next.js",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Vue",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Nuxt",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Angular",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "React Native",
                "stack_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Ionic",
                "stack_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Bootstrap",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Tailwind",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Material UI",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Redux",
                "stack_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Node.js",
                "stack_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Express",
                "stack_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "PHP",
                "stack_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Laravel",
                "stack_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MySQL",
                "stack_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Sequelize",
                "stack_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "AWS",
                "stack_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Git",
                "stack_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "Scrum",
                "stack_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ]);
        Experience::insert([
            [
                "company_name" => "Nebulae",
                "description" => "In 2023, I joined Nebulae as front end developer. Despite initially I worked as a front end developer, in the working process I also developed API for Nebulae's client in Europe, as well as working on developing mobile app.",
                "image" => "img/nebulae.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "company_name" => "VC Gamers",
                "description" => "At the end of 2021, I joined VCGamers as front end developer. Since then, I built VCGamers Marketplace,
                VC Arena, and \$VCG Token website.",
                "image" => "img/nebulae.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "company_name" => "Skyshi Digital Indonesia",
                "description" => "Since January 2021, I joined Skyshi as front end developer, and built some web apps requested by
                Skyshi's clients. Awarded as the engineer with best velocity for 3rd quarter of 2021.",
                "image" => "img/skyshi.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "company_name" => "PT. BPR Danaputra Sakti",
                "description" => "In 2019, worked as saving and deposit account administrator. Then, moved to Legal Officer. And the
                last, as lending marketing in 2020. Created some Excel mini-programs that increases working efficiency until 300%.",
                "image" => "img/dps-squar-bw.png",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);
        Education::insert([
            [
                "title" => "Glints Academy",
                "image"  => "img/glints-circled.png",
                "description" => "Learned front-end development using React.js in Glints Academy Batch 8, 2020.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "STID Al Hadid Surabaya",
                "image"  => "img/stid.png",
                "description" => "Studied communication and graduated in 2019. Runner-Up of English Debate Competition in 2016.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "title" => "Universitas Airlangga",
                "image"  => "img/stid.png",
                "description" => "Studied in English Department and graduated in 2018. One of the best graduates in,
                2018.",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ]);
    }
}

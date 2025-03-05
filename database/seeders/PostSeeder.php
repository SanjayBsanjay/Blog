<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $technologyCategory = Category::firstOrCreate(['name' => 'Technology']);
        $healthCategory = Category::firstOrCreate(['name' => 'Health']);
        $businessCategory = Category::firstOrCreate(['name' => 'Business']);
        $LifestyleCategory = Category::firstOrCreate(['name' => 'Lifestyle']);

        //
        // Creating some sample posts
        //technology
        $technologyCategory = Category::firstOrCreate(['name' => 'Technology']);
        Post::create([
            'title' => 'The Future of Web Development',
            'short_description' => 'Explore the advancements in web development technologies.',
            'description' => 'This article discusses the latest trends in web development, including new frameworks, technologies, and methodologies.',
            'category_id' => Category::where('name', 'Technology')->first()->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'Artificial Intelligence and Machine Learning',
            'short_description' => 'An overview of AI and ML technologies.',
            'description' => 'This post provides insights into artificial intelligence and machine learning, including how they are transforming industries like healthcare, finance, and more.',
            'category_id' => $technologyCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'The Role of Cloud Computing in Modern Businesses',
            'short_description' => 'Understanding cloud computing and its importance for businesses.',
            'description' => 'Cloud computing has become a crucial part of modern business infrastructure. This post explores the benefits of cloud technology and how it can optimize operations.',
            'category_id' => $technologyCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'The Impact of Blockchain on Security',
            'short_description' => 'How blockchain technology is revolutionizing security.',
            'description' => 'Blockchain technology has far-reaching implications, especially in security. This post discusses how blockchain is improving data security and privacy across different sectors.',
            'category_id' => $technologyCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'The Rise of 5G: What You Need to Know',
            'short_description' => 'Explore the impact of 5G on the world.',
            'description' => 'The rollout of 5G technology promises faster speeds and more reliable connections. This post highlights the potential applications and benefits of 5G in everyday life and business.',
            'category_id' => $technologyCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'How the Internet of Things (IoT) is Shaping Our Future',
            'short_description' => 'An in-depth look at IoT technology.',
            'description' => 'The Internet of Things (IoT) is creating a more connected world. This article examines the IoT ecosystem and its role in transforming industries like healthcare, manufacturing, and retail.',
            'category_id' => $technologyCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'Introduction to Augmented Reality and Virtual Reality',
            'short_description' => 'What you need to know about AR and VR.',
            'description' => 'Augmented reality (AR) and virtual reality (VR) are changing the way we interact with technology. This post introduces both concepts and explores their applications in entertainment, education, and beyond.',
            'category_id' => $technologyCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'Cybersecurity in the Digital Age',
            'short_description' => 'Tips and trends for protecting your online data.',
            'description' => 'In an increasingly digital world, cybersecurity has never been more important. This article explores the latest cybersecurity threats and strategies for protecting sensitive data online.',
            'category_id' => $technologyCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'Exploring the World of Quantum Computing',
            'short_description' => 'What is quantum computing and why is it important?',
            'description' => 'Quantum computing is an emerging field that promises to revolutionize industries from cryptography to AI. This post explains the basics of quantum computing and its potential impact on the future.',
            'category_id' => $technologyCategory->id,
            'status' => 'published',
        ]);




        //bussiness
        $businessCategory = Category::firstOrCreate(['name' => 'Business']);
        Post::create([
            'title' => 'Business Growth in the Digital Age',
            'short_description' => 'Discover how businesses can thrive with digital transformation.',
            'description' => 'This post covers strategies businesses can adopt to leverage digital technologies for growth and sustainability in the modern era.',
            'category_id' => Category::where('name', 'Business')->first()->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'The Future of E-Commerce: Trends to Watch',
            'short_description' => 'Key e-commerce trends to help businesses stay competitive.',
            'description' => 'In this post, we discuss the future of e-commerce and highlight the trends that businesses need to watch and adapt to in order to stay ahead of the curve.',
            'category_id' => $businessCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'How to Build a Strong Brand Identity',
            'short_description' => 'Learn the essentials of creating a powerful brand identity.',
            'description' => 'A strong brand identity is crucial for business success. This article outlines the steps to building a recognizable and trustworthy brand that resonates with customers.',
            'category_id' => $businessCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'Effective Marketing Strategies for Small Businesses',
            'short_description' => 'Marketing techniques that can help small businesses succeed.',
            'description' => 'This post explores low-cost, high-impact marketing strategies that small businesses can use to grow their brand, attract customers, and drive sales.',
            'category_id' => $businessCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'How to Use Social Media for Business Growth',
            'short_description' => 'Harness the power of social media to expand your business.',
            'description' => 'In this post, we explore how businesses can effectively use social media platforms to grow their brand, engage with customers, and increase sales.',
            'category_id' => $businessCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'Building a Remote Workforce: Tips and Best Practices',
            'short_description' => 'Essential strategies for managing remote teams effectively.',
            'description' => 'This article discusses the key factors to consider when building a remote workforce and offers practical advice for managing remote teams to maximize productivity.',
            'category_id' => $businessCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'The Importance of Customer Feedback for Business Success',
            'short_description' => 'Why businesses should listen to their customers.',
            'description' => 'Customer feedback is a powerful tool for improving products and services. This post highlights the importance of actively seeking and implementing customer feedback for business growth.',
            'category_id' => $businessCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'Data-Driven Decision Making for Businesses',
            'short_description' => 'Using data to drive smarter business decisions.',
            'description' => 'In this post, we explore how businesses can leverage data analytics to make informed decisions, improve processes, and gain a competitive edge in the market.',
            'category_id' => $businessCategory->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => 'Managing Business Finances During Uncertain Times',
            'short_description' => 'How to safeguard your business during financial uncertainty.',
            'description' => 'This post offers practical tips on managing business finances during challenging times, focusing on cash flow management, cost-cutting strategies, and securing financial stability.',
            'category_id' => $businessCategory->id,
            'status' => 'published',
        ]);


        //health
        $healthCategory = Category::firstOrCreate(['name' => 'Health']);
        Post::create([
            'title' => 'How to Live a Healthier Life',
            'short_description' => 'Simple tips for a better and healthier lifestyle.',
            'description' => 'In this article, we explore effective tips for living a healthier life, from better diet choices to improving mental health.',
            'category_id' => Category::where('name', 'Health')->first()->id,
            'status' => 'published',
        ]);

        Post::create([
            'title' => '10 Habits for a Healthier You',
            'short_description' => 'Easy habits to incorporate into your daily routine.',
            'description' => 'In this post, we cover 10 simple habits that can have a huge impact on your health, from morning routines to mindful eating.',
            'category_id' => Category::where('name', 'Health')->first()->id,
            'status' => 'published',
        ]);
        
        Post::create([
            'title' => 'The Importance of Mental Health',
            'short_description' => 'Understanding the significance of mental health.',
            'description' => 'Mental health plays a vital role in overall well-being. This article explores the connection between mental and physical health, and offers strategies for improving mental wellness.',
            'category_id' => Category::where('name', 'Health')->first()->id,
            'status' => 'published',
        ]);
        
        Post::create([
            'title' => 'Nutrition Tips for a Balanced Diet',
            'short_description' => 'Tips to create a balanced, nutritious diet.',
            'description' => 'A balanced diet is key to overall health. Here, we discuss how to build a nutritious meal plan and the essential nutrients your body needs.',
            'category_id' => Category::where('name', 'Health')->first()->id,
            'status' => 'published',
        ]);


        //lifestyle
        Post::create([
            'title' => 'How to Build a Minimalist Wardrobe',
            'short_description' => 'Learn how to create a functional and stylish minimalist wardrobe.',
            'description' => 'In this post, we guide you through the steps of building a minimalist wardrobe that’s both practical and fashionable, with a focus on quality over quantity.',
            'category_id' => Category::where('name', 'Lifestyle')->first()->id,
            'status' => 'published',
        ]);
        Post::create([
            'title' => 'The Art of Decluttering Your Home',
            'short_description' => 'How to declutter and organize your living space.',
            'description' => 'Clutter can have a negative impact on your life. This post provides practical tips and strategies to help you declutter and organize your home, leading to a more peaceful and productive environment.',
            'category_id' => Category::where('name', 'Lifestyle')->first()->id,
            'status' => 'published',
        ]);
        Post::create([
            'title' => 'How to Travel Sustainably on a Budget',
            'short_description' => 'Tips for eco-friendly and budget-conscious travel.',
            'description' => 'In this post, we’ll show you how to travel sustainably without breaking the bank. Learn about eco-friendly accommodations, transportation, and activities to reduce your travel carbon footprint.',
            'category_id' => Category::where('name', 'Lifestyle')->first()->id,
            'status' => 'published',
        ]);
        Post::create([
            'title' => '10 Tips for a Healthier Morning Routine',
            'short_description' => 'Simple habits to start your day off right.',
            'description' => 'This post shares 10 easy and effective habits to incorporate into your morning routine, helping you boost your energy and productivity for the day ahead.',
            'category_id' => Category::where('name', 'Lifestyle')->first()->id,
            'status' => 'published',
        ]);
        Post::create([
            'title' => 'Mindfulness and Meditation for a Balanced Life',
            'short_description' => 'Discover the benefits of mindfulness and meditation.',
            'description' => 'This article introduces the practice of mindfulness and meditation, exploring how these techniques can help reduce stress, improve focus, and create a more balanced lifestyle.',
            'category_id' => Category::where('name', 'Lifestyle')->first()->id,
            'status' => 'published',
        ]);

    }
}


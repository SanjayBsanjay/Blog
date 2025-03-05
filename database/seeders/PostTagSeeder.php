<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //technology
        $technologyCategory = Category::firstOrCreate(['name' => 'Technology']);

        $post1 = Post::firstOrCreate([
            'title' => 'The Future of Web Development'
        ], [
            'short_description' => 'Explore the advancements in web development technologies.',
            'description' => 'This article discusses the latest trends in web development, including new frameworks, technologies, and methodologies.',
            'category_id' => $technologyCategory->id,
            'status' => 'published'
        ]);

        $post2 = Post::firstOrCreate([
            'title' => 'Artificial Intelligence and Machine Learning'
        ], [
            'short_description' => 'An overview of AI and ML technologies.',
            'description' => 'This post provides insights into artificial intelligence and machine learning, including how they are transforming industries like healthcare, finance, and more.',
            'category_id' => $technologyCategory->id,
            'status' => 'published'
        ]);

        $post3 = Post::firstOrCreate([
            'title' => 'The Role of Cloud Computing in Modern Businesses'
        ], [
            'short_description' => 'Understanding cloud computing and its importance for businesses.',
            'description' => 'Cloud computing has become a crucial part of modern business infrastructure. This post explores the benefits of cloud technology and how it can optimize operations.',
            'category_id' => $technologyCategory->id,
            'status' => 'published'
        ]);

        $post4 = Post::firstOrCreate([
            'title' => 'The Impact of Blockchain on Security'
        ], [
            'short_description' => 'How blockchain technology is revolutionizing security.',
            'description' => 'Blockchain technology has far-reaching implications, especially in security. This post discusses how blockchain is improving data security and privacy across different sectors.',
            'category_id' => $technologyCategory->id,
            'status' => 'published'
        ]);

        $post5 = Post::firstOrCreate([
            'title' => 'The Rise of 5G: What You Need to Know'
        ], [
            'short_description' => 'Explore the impact of 5G on the world.',
            'description' => 'The rollout of 5G technology promises faster speeds and more reliable connections. This post highlights the potential applications and benefits of 5G in everyday life and business.',
            'category_id' => $technologyCategory->id,
            'status' => 'published'
        ]);

        $post6 = Post::firstOrCreate([
            'title' => 'How the Internet of Things (IoT) is Shaping Our Future'
        ], [
            'short_description' => 'An in-depth look at IoT technology.',
            'description' => 'The Internet of Things (IoT) is creating a more connected world. This article examines the IoT ecosystem and its role in transforming industries like healthcare, manufacturing, and retail.',
            'category_id' => $technologyCategory->id,
            'status' => 'published'
        ]);

        $post7 = Post::firstOrCreate([
            'title' => 'Introduction to Augmented Reality and Virtual Reality'
        ], [
            'short_description' => 'What you need to know about AR and VR.',
            'description' => 'Augmented reality (AR) and virtual reality (VR) are changing the way we interact with technology. This post introduces both concepts and explores their applications in entertainment, education, and beyond.',
            'category_id' => $technologyCategory->id,
            'status' => 'published'
        ]);

        $post8 = Post::firstOrCreate([
            'title' => 'Cybersecurity in the Digital Age'
        ], [
            'short_description' => 'Tips and trends for protecting your online data.',
            'description' => 'In an increasingly digital world, cybersecurity has never been more important. This article explores the latest cybersecurity threats and strategies for protecting sensitive data online.',
            'category_id' => $technologyCategory->id,
            'status' => 'published'
        ]);

        $post9 = Post::firstOrCreate([
            'title' => 'Exploring the World of Quantum Computing'
        ], [
            'short_description' => 'What is quantum computing and why is it important?',
            'description' => 'Quantum computing is an emerging field that promises to revolutionize industries from cryptography to AI. This post explains the basics of quantum computing and its potential impact on the future.',
            'category_id' => $technologyCategory->id,
            'status' => 'published'
        ]);
        //tech


        //bussiness
        // Get or create the Business category
        $businessCategory = Category::firstOrCreate(['name' => 'Business']);

        $post10 = Post::firstOrCreate([
            'title' => 'Business Growth in the Digital Age'
        ], [
            'short_description' => 'Discover how businesses can thrive with digital transformation.',
            'description' => 'This post covers strategies businesses can adopt to leverage digital technologies for growth and sustainability in the modern era.',
            'category_id' => $businessCategory->id,
            'status' => 'published'
        ]);

        $post11 = Post::firstOrCreate([
            'title' => 'The Future of E-Commerce: Trends to Watch'
        ], [
            'short_description' => 'Key e-commerce trends to help businesses stay competitive.',
            'description' => 'In this post, we discuss the future of e-commerce and highlight the trends that businesses need to watch and adapt to in order to stay ahead of the curve.',
            'category_id' => $businessCategory->id,
            'status' => 'published'
        ]);

        $post12 = Post::firstOrCreate([
            'title' => 'How to Build a Strong Brand Identity'
        ], [
            'short_description' => 'Learn the essentials of creating a powerful brand identity.',
            'description' => 'A strong brand identity is crucial for business success. This article outlines the steps to building a recognizable and trustworthy brand that resonates with customers.',
            'category_id' => $businessCategory->id,
            'status' => 'published'
        ]);

        $post13 = Post::firstOrCreate([
            'title' => 'Effective Marketing Strategies for Small Businesses'
        ], [
            'short_description' => 'Marketing techniques that can help small businesses succeed.',
            'description' => 'This post explores low-cost, high-impact marketing strategies that small businesses can use to grow their brand, attract customers, and drive sales.',
            'category_id' => $businessCategory->id,
            'status' => 'published'
        ]);

        $post14 = Post::firstOrCreate([
            'title' => 'How to Use Social Media for Business Growth'
        ], [
            'short_description' => 'Harness the power of social media to expand your business.',
            'description' => 'In this post, we explore how businesses can effectively use social media platforms to grow their brand, engage with customers, and increase sales.',
            'category_id' => $businessCategory->id,
            'status' => 'published'
        ]);

        $post15 = Post::firstOrCreate([
            'title' => 'Building a Remote Workforce: Tips and Best Practices'
        ], [
            'short_description' => 'Essential strategies for managing remote teams effectively.',
            'description' => 'This article discusses the key factors to consider when building a remote workforce and offers practical advice for managing remote teams to maximize productivity.',
            'category_id' => $businessCategory->id,
            'status' => 'published'
        ]);

        $post16 = Post::firstOrCreate([
            'title' => 'The Importance of Customer Feedback for Business Success'
        ], [
            'short_description' => 'Why businesses should listen to their customers.',
            'description' => 'Customer feedback is a powerful tool for improving products and services. This post highlights the importance of actively seeking and implementing customer feedback for business growth.',
            'category_id' => $businessCategory->id,
            'status' => 'published'
        ]);

        $post17 = Post::firstOrCreate([
            'title' => 'Data-Driven Decision Making for Businesses'
        ], [
            'short_description' => 'Using data to drive smarter business decisions.',
            'description' => 'In this post, we explore how businesses can leverage data analytics to make informed decisions, improve processes, and gain a competitive edge in the market.',
            'category_id' => $businessCategory->id,
            'status' => 'published'
        ]);

        $post18 = Post::firstOrCreate([
            'title' => 'Managing Business Finances During Uncertain Times'
        ], [
            'short_description' => 'How to safeguard your business during financial uncertainty.',
            'description' => 'This post offers practical tips on managing business finances during challenging times, focusing on cash flow management, cost-cutting strategies, and securing financial stability.',
            'category_id' => $businessCategory->id,
            'status' => 'published'
        ]);
        //business

        //Health
        // Get or create the Health category
        $healthCategory = Category::firstOrCreate(['name' => 'Health']);

        $post19 = Post::firstOrCreate([
            'title' => 'How to Live a Healthier Life'
        ], [
            'short_description' => 'Simple tips for a better and healthier lifestyle.',
            'description' => 'In this article, we explore effective tips for living a healthier life, from better diet choices to improving mental health.',
            'category_id' => $healthCategory->id,
            'status' => 'published'
        ]);

        $post20 = Post::firstOrCreate([
            'title' => '10 Habits for a Healthier You'
        ], [
            'short_description' => 'Easy habits to incorporate into your daily routine.',
            'description' => 'In this post, we cover 10 simple habits that can have a huge impact on your health, from morning routines to mindful eating.',
            'category_id' => $healthCategory->id,
            'status' => 'published'
        ]);

        $post21 = Post::firstOrCreate([
            'title' => 'The Importance of Mental Health'
        ], [
            'short_description' => 'Understanding the significance of mental health.',
            'description' => 'Mental health plays a vital role in overall well-being. This article explores the connection between mental and physical health, and offers strategies for improving mental wellness.',
            'category_id' => $healthCategory->id,
            'status' => 'published'
        ]);

        $post22 = Post::firstOrCreate([
            'title' => 'Nutrition Tips for a Balanced Diet'
        ], [
            'short_description' => 'Tips to create a balanced, nutritious diet.',
            'description' => 'A balanced diet is key to overall health. Here, we discuss how to build a nutritious meal plan and the essential nutrients your body needs.',
            'category_id' => $healthCategory->id,
            'status' => 'published'
        ]);
        //health

        //lifestyle
        $lifestyleCategory = Category::firstOrCreate(['name' => 'Lifestyle']);

        $post23 = Post::firstOrCreate([
            'title' => 'How to Build a Minimalist Wardrobe'
        ], [
            'short_description' => 'Learn how to create a functional and stylish minimalist wardrobe.',
            'description' => 'In this post, we guide you through the steps of building a minimalist wardrobe that’s both practical and fashionable, with a focus on quality over quantity.',
            'category_id' => $lifestyleCategory->id,
            'status' => 'published'
        ]);

        $post24 = Post::firstOrCreate([
            'title' => 'The Art of Decluttering Your Home'
        ], [
            'short_description' => 'How to declutter and organize your living space.',
            'description' => 'Clutter can have a negative impact on your life. This post provides practical tips and strategies to help you declutter and organize your home, leading to a more peaceful and productive environment.',
            'category_id' => $lifestyleCategory->id,
            'status' => 'published'
        ]);

        $post25 = Post::firstOrCreate([
            'title' => 'How to Travel Sustainably on a Budget'
        ], [
            'short_description' => 'Tips for eco-friendly and budget-conscious travel.',
            'description' => 'In this post, we’ll show you how to travel sustainably without breaking the bank. Learn about eco-friendly accommodations, transportation, and activities to reduce your travel carbon footprint.',
            'category_id' => $lifestyleCategory->id,
            'status' => 'published'
        ]);

        $post26 = Post::firstOrCreate([
            'title' => '10 Tips for a Healthier Morning Routine'
        ], [
            'short_description' => 'Simple habits to start your day off right.',
            'description' => 'This post shares 10 easy and effective habits to incorporate into your morning routine, helping you boost your energy and productivity for the day ahead.',
            'category_id' => $lifestyleCategory->id,
            'status' => 'published'
        ]);

        $post27 = Post::firstOrCreate([
            'title' => 'Mindfulness and Meditation for a Balanced Life'
        ], [
            'short_description' => 'Discover the benefits of mindfulness and meditation.',
            'description' => 'This article introduces the practice of mindfulness and meditation, exploring how these techniques can help reduce stress, improve focus, and create a more balanced lifestyle.',
            'category_id' => $lifestyleCategory->id,
            'status' => 'published'
        ]);
    

        // Check if tags exist, if not create them
        //tech
        $tag1 = Tag::firstOrCreate(['tag' => 'Laravel']);
        $tag2 = Tag::firstOrCreate(['tag' => 'PHP']);
        $tag3 = Tag::firstOrCreate(['tag' => 'Web Development']);
        $tag4 = Tag::firstOrCreate(['tag' => 'AI']);
        $tag5 = Tag::firstOrCreate(['tag' => 'Machine learning']);
        $tag6 = Tag::firstOrCreate(['tag' => 'Blockchain']);
        $tag7 = Tag::firstOrCreate(['tag' => 'Cybersecurity']);
        $tag8 = Tag::firstOrCreate(['tag' => '5G']);
        
        //bussiness
        $tag9 = Tag::firstOrCreate(['tag' => 'Marketing']);
        $tag10 = Tag::firstOrCreate(['tag' => 'E-Commerce']);
        $tag11 = Tag::firstOrCreate(['tag' => 'Business Strategy']);
        $tag12 = Tag::firstOrCreate(['tag' => 'Leadership']);
        $tag13 = Tag::firstOrCreate(['tag' => 'Entrepreneurship']);
        $tag14 = Tag::firstOrCreate(['tag' => 'Business']);
        $tag15 = Tag::firstOrCreate(['tag' => 'Management']);
        $tag16 = Tag::firstOrCreate(['tag' => 'Productivity']);

        //health
        $tag17 = Tag::firstOrCreate(['tag' => 'Mental Health']);
        $tag18 = Tag::firstOrCreate(['tag' => 'Nutrition']);
        $tag19 = Tag::firstOrCreate(['tag' => 'Wellness']);
        $tag20 = Tag::firstOrCreate(['tag' => 'Fitness']);
        $tag21 = Tag::firstOrCreate(['tag' => 'Healthy Habits']);
        $tag22 = Tag::firstOrCreate(['tag' => 'Health Tips']);
        $tag23 = Tag::firstOrCreate(['tag' => 'Health']);
        $tag24 = Tag::firstOrCreate(['tag' => 'Healthy Living']);


        //lifestyle
        $tag25 = Tag::firstOrCreate(['tag' => 'Minimalism']);
        $tag26 = Tag::firstOrCreate(['tag' => 'Travel']);
        $tag27 = Tag::firstOrCreate(['tag' => 'Decluttering']);
        $tag28 = Tag::firstOrCreate(['tag' => 'Mindfulness']);
        $tag29 = Tag::firstOrCreate(['tag' => 'Sustainability']);
        $tag30 = Tag::firstOrCreate(['tag' => 'Lifestyle']);
        $tag31 = Tag::firstOrCreate(['tag' => 'Positive Thinking']);
        $tag32 = Tag::firstOrCreate(['tag' => 'Work-Life Balance']);



        // // Attaching tags to posts
        $post1->tags()->syncWithoutDetaching([$tag1->id, $tag2->id, $tag3->id,$tag4->id,$tag5->id,$tag6->id,$tag7->id,$tag8->id]);
        $post2->tags()->syncWithoutDetaching([$tag1->id, $tag2->id, $tag3->id,$tag4->id,$tag5->id,$tag6->id,$tag7->id,$tag8->id]);
        $post3->tags()->syncWithoutDetaching([$tag1->id, $tag2->id, $tag3->id,$tag4->id,$tag5->id,$tag6->id,$tag7->id,$tag8->id]);
        $post4->tags()->syncWithoutDetaching([$tag1->id, $tag2->id, $tag3->id,$tag4->id,$tag5->id,$tag6->id,$tag7->id,$tag8->id]);
        $post5->tags()->syncWithoutDetaching([$tag1->id, $tag2->id, $tag3->id,$tag4->id,$tag5->id,$tag6->id,$tag7->id,$tag8->id]);
        $post6->tags()->syncWithoutDetaching([$tag1->id, $tag2->id, $tag3->id,$tag4->id,$tag5->id,$tag6->id,$tag7->id,$tag8->id]);
        $post7->tags()->syncWithoutDetaching([$tag1->id, $tag2->id, $tag3->id,$tag4->id,$tag5->id,$tag6->id,$tag7->id,$tag8->id]);
        $post8->tags()->syncWithoutDetaching([$tag1->id, $tag2->id, $tag3->id,$tag4->id,$tag5->id,$tag6->id,$tag7->id,$tag8->id]);
        $post9->tags()->syncWithoutDetaching([$tag1->id, $tag2->id, $tag3->id,$tag4->id,$tag5->id,$tag6->id,$tag7->id,$tag8->id]);

        //bussiness
        $post10->tags()->syncWithoutDetaching([$tag9->id, $tag10->id, $tag11->id,$tag12->id,$tag13->id,$tag14->id,$tag15->id,$tag16->id]);
        $post11->tags()->syncWithoutDetaching([$tag9->id, $tag10->id, $tag11->id,$tag12->id,$tag13->id,$tag14->id,$tag15->id,$tag16->id]);
        $post12->tags()->syncWithoutDetaching([$tag9->id, $tag10->id, $tag11->id,$tag12->id,$tag13->id,$tag14->id,$tag15->id,$tag16->id]);
        $post13->tags()->syncWithoutDetaching([$tag9->id, $tag10->id, $tag11->id,$tag12->id,$tag13->id,$tag14->id,$tag15->id,$tag16->id]);
        $post14->tags()->syncWithoutDetaching([$tag9->id, $tag10->id, $tag11->id,$tag12->id,$tag13->id,$tag14->id,$tag15->id,$tag16->id]);
        $post15->tags()->syncWithoutDetaching([$tag9->id, $tag10->id, $tag11->id,$tag12->id,$tag13->id,$tag14->id,$tag15->id,$tag16->id]);
        $post16->tags()->syncWithoutDetaching([$tag9->id, $tag10->id, $tag11->id,$tag12->id,$tag13->id,$tag14->id,$tag15->id,$tag16->id]);
        $post17->tags()->syncWithoutDetaching([$tag9->id, $tag10->id, $tag11->id,$tag12->id,$tag13->id,$tag14->id,$tag15->id,$tag16->id]);
        $post18->tags()->syncWithoutDetaching([$tag9->id, $tag10->id, $tag11->id,$tag12->id,$tag13->id,$tag14->id,$tag15->id,$tag16->id]);

        //health
        $post19->tags()->syncWithoutDetaching([$tag17->id, $tag18->id, $tag19->id,$tag20->id,$tag21->id,$tag22->id,$tag23->id,$tag24->id]);
        $post20->tags()->syncWithoutDetaching([$tag17->id, $tag18->id, $tag19->id,$tag20->id,$tag21->id,$tag22->id,$tag23->id,$tag24->id]);
        $post21->tags()->syncWithoutDetaching([$tag17->id, $tag18->id, $tag19->id,$tag20->id,$tag21->id,$tag22->id,$tag23->id,$tag24->id]);
        $post22->tags()->syncWithoutDetaching([$tag17->id, $tag18->id, $tag19->id,$tag20->id,$tag21->id,$tag22->id,$tag23->id,$tag24->id]);

        //life
        $post23->tags()->syncWithoutDetaching([$tag25->id, $tag26->id, $tag27->id,$tag28->id,$tag29->id,$tag30->id,$tag31->id,$tag31->id]);$post24->tags()->syncWithoutDetaching([$tag25->id, $tag26->id, $tag27->id,$tag28->id,$tag29->id,$tag30->id,$tag31->id,$tag31->id]);$post25->tags()->syncWithoutDetaching([$tag25->id, $tag26->id, $tag27->id,$tag28->id,$tag29->id,$tag30->id,$tag31->id,$tag31->id]);$post26->tags()->syncWithoutDetaching([$tag25->id, $tag26->id, $tag27->id,$tag28->id,$tag29->id,$tag30->id,$tag31->id,$tag31->id]);$post27->tags()->syncWithoutDetaching([$tag25->id, $tag26->id, $tag27->id,$tag28->id,$tag29->id,$tag30->id,$tag31->id,$tag31->id]);

    }
}







```mermaid
  POST }|--|{ CATEGORIES : types
       CATEGORIES {
        unsigned  id
        int  parent_id
        string title 
        string meta_title
        string slug
        string content
     
    }
    POST {
        unsigned  id
        int  author_id
        int  parent_id
        string title 
        string meta_title
        string slug
        string summery
        int  published
        string content
    }
     POST }|--o{ TAGS : tag
    TAGS {
        unsigned  id
        string title 
        string meta_title
        string slug
        string content
    }
   
   
    POST ||--o{ POST_CATEGORIES : post_cat
    CATEGORIES ||--o{  POST_CATEGORIES : post_cat
    
    TAGS ||--o{ POST_TAGS : post_tag
    POST ||--o{ POST_TAGS : post_tag
    
    POST }|--o{ POST_METAS : post_cat
    POST }|--o{ POST_COMMENTS : post_cat

    POST_CATEGORIES{
        unsigned  id
        int  post_id
        int  category_id
        
     
    }

    POST_TAGS{
        unsigned  id
        int  post_id
        int  tag_id
        
     
    }


    POST_METAS{

        unsigned  id
        int  post_id
        string  content
        
    }


    POST_COMMENTS{

        unsigned  id
        int  post_id
        int  parent_id
        string title 
        int  published
        string content
        
    }

```

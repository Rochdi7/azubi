@extends('frontoffice.layouts.app')

@section('title', 'Career Pathway Decision Tool | GoAusbildung')

@section('meta')
    <meta name="description" content="AI-powered career guidance to help you choose the right vocational training path in Germany based on your interests, skills, and goals.">
    <meta property="og:title" content="Career Pathway Decision Tool | GoAusbildung">
    <meta property="og:description" content="AI-powered career guidance to help you choose the right vocational training path in Germany based on your interests, skills, and goals.">
@endsection

@section('content')
          <article>
            <div style="opacity: 0; transform: translateY(20px)">
              <!--$!--><template
                data-dgst="BAILOUT_TO_CLIENT_SIDE_RENDERING"
              ></template>
              <div class="p-8 bg-cream rounded-lg">
                <div class="flex items-center justify-center space-x-2">
                  <div
                    class="animate-spin rounded-full h-6 w-6 border-b-2 border-orange"
                    aria-hidden="true"
                  ></div>
                  <span class="text-muted-foreground"
                    >Loading career pathway tool...</span
                  >
                </div>
              </div>
              <!--/$-->
            </div>
          </article>
        </main>
      </main>
@endsection

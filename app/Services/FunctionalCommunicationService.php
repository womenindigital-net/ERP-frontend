<?php

namespace App\Services;

use App\Models\FunctionalCommunication;
use App\Utility\SocialCommunication;
use App\Repositories\FunctionalCommunicationRepository;
use App\Utility\FunctionalCommunication as UtilityFunctionalCommunication;

class FunctionalCommunicationService
{
    private FunctionalCommunicationRepository $repo;

    public function __construct(FunctionalCommunicationRepository $repository)
    {
        $this->repo = $repository;
    }

    public function store(array $validated): void
    {

        $data = $this->processInfo($validated);

        $this->repo->store($data);
    }

    public function update(FunctionalCommunication $functionalCommunication, mixed $validated): void
    {
        $data = $this->processInfo($validated);

        $this->repo->update($functionalCommunication, $data);
    }

    private function processInfo(array $validated): array
    {
        [$speech, $data] = $this->collectSpeech($validated);
        [$bodyLanguage, $data] = $this->collectBodyLanguage($data);
        [$wordsUsagesVocabulary, $data] = $this->collectWordsUsagesVocabulary($data);
        [$sentenceStructure, $data] = $this->collectSentenceStructure($data);
        [$relayingInformation, $data] = $this->collectRelayingInformation($data);
        [$followingDirections, $data] = $this->collectFollowingDirections($data);
        [$attentionAndMemory, $data] = $this->collectAttentionAndMemory($data);
        [$conversationSocialCommunication, $data] = $this->collectConversationSocialCommunication($data);
        [$playSkill, $data] = $this->collectPlaySkill($data);

        return [
            'collection_date' => $validated['collection_date'],
            'teacher_id' => $validated['teacher_id'],
            'student_id' => $validated['student_id'],
            'speech' => $speech,
            'body_language' => $bodyLanguage,
            'words_usages_vocabulary' => $wordsUsagesVocabulary,
            'sentence_structure' => $sentenceStructure,
            'relaying_information' => $relayingInformation,
            'following_directions' => $followingDirections,
            'attention_and_memory' => $attentionAndMemory,
            'conversation_social_communication' => $conversationSocialCommunication,
            'play_skill' => $playSkill,
        ];
    }

    private function collectSpeech(mixed $validated): array
    {
        return extractNecessaryFieldsFromData($validated, UtilityFunctionalCommunication::$columnCollections['speech']);
    }

    private function collectBodyLanguage(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['personal']);
    }

    private function collectWordsUsagesVocabulary(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['topic_maintenance']);
    }

    private function collectSentenceStructure(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['conversational_structure']);
    }
    private function collectRelayingInformation(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['word_structure']);
    }
    private function collectFollowingDirections(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['manner_effectiveness']);
    }
    private function collectAttentionAndMemory(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['repair_structures']);
    }
    private function collectConversationSocialCommunication(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['responsiveness']);
    }
    private function collectPlaySkill(mixed $data): array
    {
        return extractNecessaryFieldsFromData($data, SocialCommunication::$columnCollections['instrumental_states_needs']);
    }
}

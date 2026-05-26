<title>SoundData</title>
<structure>
	<realm>Shared</realm>
	<description>
		Table structure used for <page>SlashCo.AudioSystem.PlaySound</page>
	</description>
	<fields>
		<item name="soundPath" type="string">
			**This is the only required field.**<br>
			the sound path for the sound to play
		</item>
		<item name="soundLevel" type="number">
			used to calculate a distance for when the sound fades and cannot be heard from
		</item>
		<item name="identifier" type="string">
			the identifier of the sound, if nil it will use the soundPath field as the identifier
		</item>
		<item name="startTick" type="number">
			the tick in which the sound was started, this value is used to synchronize the sound for all players. Defaults to the current tick
		</item>
		<item name="entity" type="Entity">
			the entity the channel should follow, defaults to the world entity
		</item>
		<item name="volume" type="number">
			the volume of the sound, defaults to 1
		</item>
		<item name="looping" type="boolean">
			if the sound should be looped or not, defaults to false
		</item>
		<item name="callback" type="function">
			the callback function that is called when the channel was created. The channel is given to the callback as the first argument
		</item>
		<item name="minDistance" type="number">
			the minimum distance for the sound to start fading
		</item>
		<item name="maxDistance" type="number">
			the maximum distance after which the sound cannot be heard anymore
		</item>
		<item name="startDistance" type="number">
			the distance at which the sound should begin to be hearable, default 0. Close up the sound is fully audible. This allows you to make sounds only audible at a certain distance, meaning if you're closer than this distance, it cannot be heard
		</item>
		<item name="startEndDistance" type="number">
			the distance at which the sound should be fully audible, default 0
		</item>
		<item name="position" type="Vector">
			a position to play the sound from. If an entity is set it will override this position, however if the entity has not networked yet this ensures the sound starts at the correct position
		</item>
		<item name="modes" type="string">
			any additional modes to pass to <page>SlashCo.AudioSystem.CreateChannel</page>
		</item>
		<item name="pan" type="number">
			the sound pan. See https://wiki.facepunch.com/gmod/IGModAudioChannel:SetPan
		</item>
		<item name="playbackRate" type="number">
			the sound playback rate
		</item>
		<item name="noplay" type="boolean">
			won't automatically play the sound
		</item>
		<item name="group" type="string">
			if set, a hook is called allowing you to add a hook that is executed when a sound is played:<br>
			`hook.Add("SlashCO:AudioSystem:PlaySound:ExampleGroup", "Example", function(soundData, channel) end)`
		</item>
		<item name="deleteWhenDone" type="boolean">
			if true, the channel is deleted once the sound finished playing. This ignores the looping flag and still stops it<br>
			<note>
				For sounds played serverside, this will always be set to `true` when `looping` is false.
			</note>
		</item>
		<item name="fadeIn" type="number">
			how many seconds it takes for the sound to fade in at the start
		</item>
		<item name="fadeOut" type="number">
			how many seconds before the ending it should start to fade out, and when it faded out the channel is destroyed
		</item>
		<item name="fadeOutStart" type="number">
			how many seconds after the sound starts it should begin to fade out. Use a negative number to use a time based off the end of the sound instead of the start
		</item>
		<item name="forceMono" type="boolean">
			forces the sound to play as mono. Preferably use forceStereo since it won't reduce sound quality
		</item>
		<item name="forceStereo" type="boolean">
			forces the sound to play as stereo. This does not truly force stereo, but removes mono or 3D flags if they were set
		</item>
		<item name="noWorldSpace" type="boolean">
			if set it will use the entity's EyePos instead of falling back to WorldSpaceCenter
		</item>
		<item name="dynamicPan" type="boolean">
			if set it will calculate the pan for the channel, giving the sound a fake 3D effect
		</item>
		<item name="fallbackSoundPath" type="string">
			the fallback sound when the bound ConVar is disabled
		</item>
		<item name="boundConVar" type="string">
			a ConVar the sound is bound to. When the ConVar is false it will instead play fallbackSoundPath
		</item>
		<item name="disableUniqueToEntity" type="boolean">
			if set, the entity index is not added to the identifier, allowing the sound to only be played once globally instead of once per entity
		</item>
		<item name="disableAutoRemove" type="boolean">
			if set, the channel won't be removed after the entity attached to the channel is removed
		</item>
		<item name="raytraced" type="boolean">
			if set, traces are used to change the volume and position based on the environment. Experimental and performance intensive
		</item>
		<item name="modifyGroup" type="string">
			a string containing all channel groups that should be modified while this channel is playing
		</item>
		<item name="modifyGroupVolumeMult" type="number">
			the volume multiplier that should be enforced onto all channels in modifyGroup
		</item>
		<item name="modifyGroupVolumeFadeTime" type="number">
			not implemented. Time in seconds for the volume to fade to the enforced multiplier. Clamped between 0 and 30
		</item>
		<item name="pulseEffect" type="table">
			a table for the pulse effect. This feature is still experimental and should not be used
		</item>
		<item name="pulseEffect.entity" type="Entity">
			an entity that should pulse
		</item>
		<item name="pulseEffect.entityClass" type="string">
			the class of all entities that should pulse, such as sc_gascan
		</item>
		<item name="pulseEffect.frequency" type="number">
			the sound frequency that should be checked for. Currently unused
		</item>
		<item name="isServerside" type="boolean" realm="Client">
			internal field set if the sound was sent by the server
		</item>
		<item name="sendToTeam" type="number" realm="Server">
			to which team the sound should be sent to.<br>
			**Important** Internally this just sets `sendToEntity` with the table of players.<br>
		</item>
		<item name="sendToEntity" type="table|Entity" realm="Server">
			The table or the player to send the sound to
		</item>
	</fields>
	<note>
		When the entity is set to the world, the sound is played as mono and not 3D<br><br>
		`minDistance` and `maxDistance act as a fade-out range when moving too far away from the sound<br><br>
		`startDistance` and `startEndDistance` act as a fade-out range when moving too close to the sound. `startEndDistance` is the point where the sound reaches full volume while `startDistance` is fully faded out<br><br>
		All distance fields work regardless of the channel being 3D or not, allowing use with `forceStereo` without issues<br><br>
		Combining `forceStereo` with `dynamicPan` creates a fake 3D effect while preserving stereo audio quality
	</notes>
</structure>
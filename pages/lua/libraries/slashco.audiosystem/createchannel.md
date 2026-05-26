<function name="CreateChannel" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Creates a new <page>IGModAudioChannel</page> using the given inputs
		<internal></internal>
		<note>
			This function accounts for and fixes the rare case that GMod's BASS fails to play a sound and errors with `BASS_ERROR_FILEFORM`<br>
			In this case it will write out the sound onto disk and play the disk file, as this issue is related to BASS somehow failing to load sounds from mounted content.
		</note>
	</description>
	<realm>Client</realm>
	<args>
		<arg name="soundFile" type="string">The soundFile to play</arg>
		<arg name="mode" type="string">The mode's to use, can be any of the flags from <link url=https://wiki.facepunch.com/gmod/sound.PlayURL>sound.PlayURL</link></arg>
		<arg name="callback" type="function">The callback function after creation
			<callback>
				<arg name="channel" type="IGModAudioChannel">The created channel</arg>
				<arg name="channelData" type="table">The channel data</arg>
			</callback>
		</arg>
		<arg name="errorCallback" type="function" default="nil">The callback function if an error occured
			<callback>
				<arg name="errorCode" type="number">The error code</arg>
				<arg name="errorName" type="string">The error name</arg>
			</callback>
		</arg>
	</args>
</function>
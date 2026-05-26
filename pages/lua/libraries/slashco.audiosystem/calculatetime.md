<function name="CalculateTime" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Returns the calculated time a channel is supposed to be at, it accounts for looping sounds
		<note>
			This function is frequently used to synchronize channels, especially for the background channel.
		</note>
	</description>
	<realm>Client</realm>
	<args>
		<arg name="channel" type="IGModAudioChannel">The channel to use</arg>
		<arg name="tickCount" type="number">The tick count</arg>
		<arg name="looping" type="boolean">Set this to `true` if it should account for looping channels</arg>
	</args>
	<rets>
		<ret name="time" type="number">What the current channel time is supposed to be</ret>
	</rets>
</function>
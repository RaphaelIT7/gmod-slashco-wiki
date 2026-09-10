<function name="ParentChannelToEntity" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Parents the channel onto the Entity causing it to follow it's movement.
	</description>
	<realm>Client</realm>
	<group>Channels</group>
	<args>
		<arg name="channel" type="IGModAudioChannel">The channel</arg>
		<arg name="entIndex" type="number|Entity">The entIndex or Entity to parent the channel to</arg>
	</args>
</function>